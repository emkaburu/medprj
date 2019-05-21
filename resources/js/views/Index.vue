<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card card-default">
                    <div class="card-header">MEDICAL OPERATIONS & TREATMENT SIMULATOR PROGRAMME</div>
                    <!-- <nav id="nav">
                        <ul>
                            
                            <li v-if="token">
                                <a href="/logout">Logout</a>
                            </li>
                            <li v-else>
                                <a href="/login">Login</a> Or <a href="/login">Register</a>
                            </li>
                           
                        </ul>
                    </nav> -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <router-link :to="{ name: 'login' }" class="nav-link" v-if="!isLoggedIn">Login</router-link>
                        <router-link :to="{ name: 'register' }" class="nav-link" v-if="!isLoggedIn">Register</router-link>
                        <router-link :to="{ name: 'logout' }" @click="handleLogout" class="nav-link" v-if="isLoggedIn">Logout</router-link>
                        <li class="nav-link" v-if="isLoggedIn"> Hi, {{name}}</li>
                        <router-link :to="{ name: 'checkin_patient' }" class="nav-link" v-if="isLoggedIn">Check in Patient</router-link>
                    </ul>
                    <div id="content">
                        <router-view></router-view>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script type="text/javascript">
    export default {
        data(){
            return {
                isLoggedIn : null,
                name : null
            }
        },
        mounted(){
            this.isLoggedIn = localStorage.getItem('jwt')
            this.name = localStorage.getItem('user')
        },
        methods : {
                handleLogout(e){

                    if (this.password.length > 0) {
                        axios.post('api/auth/logout', {
                            
                          })
                          .then(response => {
                            
                            localStorage.removeItem('jwt')
                            
                          })
                          .catch(function (error) {
                            console.error(error);
                          });
                    }
                }
            },
    }

</script>