<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Belajar laravel</title>
    <link href="styles.css" rel="stylesheet" />
        <!-- Bootstrap core CSS -->
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

  </head>
  <body>
       
        <div class="row" id="app">
                <div class="col-sm-10">
                    <h2>with CDN INCLUDE</h2>
                    <button v-on:click="clickTest" v-bind:disabled="isButtonDisabled">Reverse Message</button>
                   <p> <input v-model="message"></p>
                </div>
                <div class="col-sm-12"><p v-if="status"> Welcomee @{{message}} </p></div>
                <div class="col-sm-12"><img v-bind:src="gambar" height="120" width="120"/></div>
                <div class="col-sm-12"><p> Hello @{{ fullName }}  <a v-bind:href="website" target="_new">Click Me @{{ website }}</a> </p></div>

            <ul class="lists left">
                <li v-for="list in lists">
                    <h4>@{{list.nama | filters | capitalize }}</h4>
                    <h5>@{{list.alamat}}</h5>
                    <h6>@{{list.telp}}</h6>
                </li>
            </ul>

<hr>
<div class="col-sm-12">
                <div id="app-7">
                    <h2>Load from another component</h2>
                    <ol>
                      <todo-item
                            v-for="item in groceryList"
                            v-bind:todo="item"
                            v-bind:key="item.id">
                       </todo-item>
                    </ol>
                </div>
        </div>
</div>
        
        
        <script>
            Vue.component('todo-item', {
            props: ['todo'],
            template: '<li>@{{ todo.text }}</li>'
            })

            var app7 = new Vue({
            el: '#app-7',
            data: {
                groceryList: [
                { id: 0, text: 'Vegetables' },
                { id: 1, text: 'Cheese' },
                { id: 2, text: 'Whatever else humans are supposed to eat' }
                ]
            }
        })
            new Vue({
                    el: "#app",
                    data: {
                        firstname: "Rafles",
                        lastname: "nainggolan",
                        isButtonDisabled:false,
                        website:'https://www.facebook.com',
                        gambar:'https://cdn-images-1.medium.com/max/800/1*-Dryjb1LkVIgEEsIWM-bxA.png',
                        status:true,
                        message: "Learn VueJS",
                        lists: [
                        {
                            nama: 'Budi ajah',
                            alamat: 'surabaya',
                            telp: '08745454545'
                        },
                        {
                            nama: 'rafles Nainggolan',
                            alamat: 'jakarta',
                            telp: '089565645455'
                        }
                        ]
                    },
                    filters: {
                        capitalize:function(value){
                            if(!value) return ''
                            value = value.toString()
                            return value.charAt(0).toUpperCase()+value.slice(1)
                        }
                    },
                    methods: {
                            clickTest: function () {
                                this.message = this.message.split('').reverse().join('')
                                this.website='https://www.instagram.com'
                                this.gambar='https://cdn-images-1.medium.com/max/1000/1*ZpHFHD8D79Qj3mqmxQPjfA.jpeg'
                            }
                        },
                    computed: {
                                fullName: function () {
                                return this.firstname + ' ' + this.lastname
                                }
                            }
                });
        </script>
  </body>
</html>