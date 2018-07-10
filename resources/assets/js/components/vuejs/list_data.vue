<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
            <h2>This include in another components</h2>
                    <div class="form-group">
            <router-link to="/" class="btn btn-default">Back</router-link>
        </div>
                <div class="card card-default">
                    <div class="card-header">This include in another components</div>
                    <div class="card-body">
                    <ul>
<li>lorem ipsum dolor</li>
<li>laravel</li>

                    </ul>
                
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
                }
            }
        }

    }
</script>