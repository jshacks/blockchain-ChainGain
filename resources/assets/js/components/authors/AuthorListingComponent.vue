<template>
    <div>
        <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Address</th>
                      <th>Percentage</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="author in authors">
                      <td>{{ author.id }}</td>
                      <td>{{ author.name }}</td>
                      <td>{{ author.address }}</td>
                      <td>{{ author.percentage }}</td>
                      <td><button class="btn btn-primary "><i class="fa fa-pencil" aria-hidden="true"></i>Edit</button></td>
                    </tr>
                  </tbody>
                </table>
              </div>
      </div>
</template>

<script>
    export default {
        mounted() {
            console.log('author list:Component mounted.')
        },
        props:{
          authors: {},
        }
    }
</script>
