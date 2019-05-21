<template>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card card-default">
                        <div class="card-header">Checkin</div>

                        <div class="card-body">
                            <form method="POST" action="/checkin_patient">
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control" v-model="name" required autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="phone" class="col-md-4 col-form-label text-md-right">Phone Number</label>

                                    <div class="col-md-6">
                                        <input id="phone" type="text" class="form-control" v-model="phone" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="other_data" class="col-md-4 col-form-label text-md-right">Other Data</label>

                                    <div class="col-md-6">
                                        <textarea id="other_data" class="form-control" v-model="other_data" required>
                                        </textarea>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary" @click="handleSubmit">
                                            Check in patient
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </template>
    <script>
        export default {
            data(){
                return {
                    name : "",
                    phone : "",
                    other_data : "",
                    
                }
            },
            methods : {
                handleSubmit(e) {
                    e.preventDefault()

                    axios.post('api/checkin-patient', {
                        name: this.name,
                        phone: this.phone,
                        other_data: this.other_data
                      })
                      .then(response => {
                        
                      })
                      .catch(error => {
                        console.error(error);
                      });
                }
            },
            beforeRouteEnter (to, from, next) { 
                

                next();
            }
        }
    </script>