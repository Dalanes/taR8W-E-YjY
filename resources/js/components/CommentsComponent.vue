<template>
    <div class="container-fluid">
        <div class="row messages">
            <div class="col-sm-12">
                <template v-for="(comment, index) in comments.slice().reverse()">
                    <div class="row message">
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-1">
                                    <span class = "name">{{ comment.name }}</span>
                                </div>
                                <div class="col-sm-11">
                                    <span class = "time">{{comment.time}}</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <span class = "text-message">{{ comment.comment }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </template>
            </div>
        </div>
        <hr class="my-4">
        <template v-if = "errors.length > 0">
            <div class="errors">
                <div class="alert alert-warning alert-dismissible show" role="alert">
                    <strong>Внимание!</strong>
                    <ul>
                        <template v-for="(error, index) in errors">
                            <li>{{error}}</li>
                        </template>
                    </ul>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>

        </template>
        <h3>Оставить комментарий</h3>
        <div class="row justify-content-sm-start">
            <div class="col-sm-6">
                <form>
                    <div class="form-group">
                        <label for="form-name">Ваше имя</label>
                        <input class = "form-control" type="text"
                               id = "form-name" name = "name"
                               v-model = "name">
                    </div>
                    <div class="form-group">
                        <label for="form-message">Ваш комментарий</label>
                        <textarea class = "form-control" name="comment"
                                  id="form-message" rows="10"
                                  v-model = "comment"></textarea>
                    </div>
                    <div class="form-group">
                        <button  class="btn float-right" id = "submit"
                                 v-on:click.prevent = "checkForm"
                                >Отправить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        /**
         * @var String csrf                 - токен
         * @var Array comments              - комментарии
         * @var String storeCommentsRoute   - роут сохранения комментария
         **/

        props: {
            csrf:               String,
            comments:           String,
            storeCommentsRoute: String
        },
        /**
         * @var Array errors    - массив ошибок
         * @var String name     - имя комментатора
         * @var String comment  - комментарий
         **/

        data() {
            return {
                errors: [],
                name: null,
                comment: null
            }
        },
        methods: {
            /**
             * Метод проверки введённой информации
             */
            checkForm: function() {
                this.errors = [];

                if(this.name < 3) {
                    this.errors.push("Имя должно содержать не меньше 3 символов");
                }

                if(this.comment === null) {
                    this.errors.push("Поле с комментарием не должно быть пустым");
                }

                if(this.errors.length === 0) {
                    this.storeComment();
                } else {
                    this.$scrollTo(".errors");
                }

            },
            /**
             * Если информация введена корректно,
             * происходит сохранение комментария
             */

            storeComment: function() {
                this.errors = [];
                axios.post(this.$props.storeCommentsRoute, {
                                name:    this.name,
                                comment: this.comment,
                                _token:  this.$props.csrf
                            })
                    .then(response=> {

                    })
                     .catch(error=> {
                        console.log(error);
                    });
                this.addComment();
                this.$scrollTo("#comments");

                this.name    = null;
                this.comment = null;
            },

            /**
             * Добавление комментария в массив комментариев на фронте
             */

            addComment: function () {
                let newComment = {
                    name:       this.name,
                    comment:    this.comment,
                    time:       moment().format("H:mm D.MM.Y")
                };

                this.comments.push(newComment);
            }
        },
        mounted() {
            this.$props.comments = JSON.parse(this.$props.comments);
        }
    }
</script>
