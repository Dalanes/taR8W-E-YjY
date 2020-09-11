<?php
    namespace App\Repositories;

    use App\Models\Comments as Model;

    class CommmentsRepository extends CoreRepository
    {

        public function __construct()
        {
            parent::__construct();
        }

        protected function getModelClass()
        {
            return Model::class;
        }

        /** Метод получения комментариев
         * @return mixed(array[objects])
         */

        public function getComments()
        {
            $columns = [
                "name",
                "comment",
                "created_at"
            ];
            $comments = $this->startCondition()
                ->select($columns)
                ->get();

            $comments = $this->getTimeInFormat($comments, "H:i d.m.Y");

            return $comments->toBase();
        }

        private function getTimeInFormat($array, $format)
        {
            foreach($array as $item) {
                $item->time  = $item->created_at->format($format);
                $item->created_at = null;
            }

            return $array;
        }
    }

?>
