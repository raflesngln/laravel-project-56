<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
            <h2>KOMPONEN EDIT FORM</h2>
                    <div class="form-group">
            <router-link to="/" class="btn btn-default">Back</router-link>
        </div>
                <div class="card card-default">
                    <div class="card-header">Contoh EDIT contact form</div>
                    <div class="card-body">
                <form v-on:submit="saveForm()">
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <label class="control-label">Contact name</label>
                            <input type="text" v-model="biodata.name" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <label class="control-label">address</label>
                            <input type="text" v-model="biodata.address" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <label class="control-label">website</label>
                            <input type="text" v-model="biodata.website" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <label class="control-label">email</label>
                            <input type="text" v-model="biodata.email" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <button class="btn btn-success">Save</button>
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
        data: function () {
            return {
                biodata: {
                    name: '',
                    address: '',
                    website: '',
                    email: '',
                }
            }
        },
        methods: {
            saveForm() {
                event.preventDefault();
                var app = this;
                var newCompany = app.company;
                axios.post('/api/v1/companies', newCompany)
                    .then(function (resp) {
                        app.$router.push({path: '/'});
                    })
                    .catch(function (resp) {
                        console.log(resp);
                        alert("Could not create your company");
                    });
            }
        }
    }
</script>