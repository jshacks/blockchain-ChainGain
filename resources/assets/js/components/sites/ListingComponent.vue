<template>
    <div>
        <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Currency</th>
                      <th>Earnings</th>
                      <th>Nr. of authors</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="site in sites">
                      <td>{{ site.id }}</td>
                      <td>{{ site.name }}</td>
                      <td>{{ site.currency }}</td>
                      <td>{{ site.earnings }}</td>
                      <td>{{ site.authors }}</td>
                      <td><button class="btn btn-xs btn-primary btn-block">Edit</button></td>
                    </tr>
                  </tbody>
                </table>
              </div>
      </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        computed: {
          sites () {
            return [
                {"id":1,"name": "xxx.com", "currency": "Monero", "earnings":"400$", "authors": 4},
                {"id":2,"name": "yyy.com", "currency": "Etherum", "earnings":"200$", "authors": 2},
            ]
          }
        },
    }
</script>
