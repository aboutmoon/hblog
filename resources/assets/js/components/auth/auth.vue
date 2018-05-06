<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="login">
                    <div class="form-group">
                        <input type="text" class="form-control"  v-model="email" placeholder="邮箱">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control"  v-model="password" placeholder="密码">
                    </div>
                    <div class="form-group">
                        <button v-on:click="login" class="btn-primary btn">登录</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                email: '',
                password: ''
            };
        },
        methods: {
            login: function (e) {
                axios.post('/api/login', {
                    email: this.email,
                    password: this.password
                }).then(function (response) {
                    console.log(response);
                }).catch(function (error) {
                        console.log(error);
                });
            }
        }
    }
</script>
