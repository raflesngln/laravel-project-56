<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
            <h2>COMPONEN COMPANIES CREATE FORM</h2>
                    <div class="form-group">
            <router-link to="/" class="btn btn-default"><i class="fas fa-angle-left fa-1x"></i>  Back</router-link>
        </div>
                <div class="card card-default">
                    <div class="card-body">
                <form v-on:submit="saveForm()">
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <label class="control-label">Company name</label>
                            <input type="text" v-model="company.name" class="form-control">
                            <p>hello {{company.name}} </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <label class="control-label">Company address</label>
                            <input type="text" v-model="company.address" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <label class="control-label">Company website</label>
                            <input type="text" v-model="company.website" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <label class="control-label">Company email</label>
                            <input type="text" v-model="company.email" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <button class="btn btn-success">SAVE</button>
                        </div>
                    </div>
                </form>

    <!-- THIS FOR AGENDA LIST DATA  -->
    <div class="container">
                        <button class="btn btn-danger btn-sm" v-on:click="bukaForm" v-if="hideTombol"><i class="fa fa-folder-open-o"></i> input data</button>
                        <div v-show="tampilForm">
                            <div class="form-group">
                                <label>Agenda</label>
                                <input type="text" class="form-control" placeholder="Agenda apa hari ini ?" v-model="agenda">
                            </div>
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <input type="text" class="form-control" v-model="deskripsi">
                            </div>
                            <div class="form-group">
                                <label>Tanggal</label>
                                <input type="date"  class="form-control" v-model="jadwal">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-md" v-on:click="tambahData"><i class="fa fa-plus-circle"></i> Tambah</button>
                            </div>
                            <hr>
                        </div>
    <div class="row">
        <div class="col-sm-12">List of State</div>
        <div class="agenda" v-for="list in lists">
            <h5><i class="fa fa-bullhorn"></i> {{ list.agenda }}</h5>
            <p><i class="fa fa-angle-right"></i> {{ list.jadwal }}</p>
            <p><i class="fa fa-angle-right"></i> {{ list.deskripsi }}</p>
        </div>
    </div>
</div>
<!-- THIS FOR AGENDA LIST DATA  -->
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
                company: {
                    name: '',
                    address: '',
                    website: '',
                    email: '',
                },
                lists: [
                        {
                            agenda: 'Belajar VueJS',
                            jadwal: '11-24-2017',
                            deskripsi: 'materi event listener'
                        },
                        {
                            agenda: 'Belajar Laravel',
                            jadwal: '11-26-2017',
                            deskripsi: 'materi membuat API'
                        }
                    ],
                tampilForm: false,
                hideTombol: true
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
                        console.log('Berhasil simpan data companises');
                    })
                    .catch(function (resp) {
                        console.log(resp);
                        alert("Could not create your company");
                    });
            },
            bukaForm() {
                    this.tampilForm = true;
                    this.hideTombol = false;
                },
              tambahData() {
                    this.lists.push({
                        agenda: this.agenda,
                        jadwal: this.jadwal,
                        deskripsi: this.deskripsi
                    });
                    this.agenda = '',
                    this.jadwal = '',
                    this.deskripsi = ''
                }
        }
    }
</script>