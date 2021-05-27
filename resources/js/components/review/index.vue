 

<template>
  
  <div>

 
<br>
   <input type="text" v-model="searchTerm" class="form-control" style="width: 300px;" placeholder="Search Here">


<br>

   <div class="row">
            <div class="col-lg-12 mb-4">
              <!-- Simple Tables -->
              <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Review List</h6>
                </div>
                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th style="color:black;font-size: 14px; font-family:Helvetica ">Name</th>
                        <th style="color:black;font-size: 14px; font-family:Helvetica ">Photo</th>
                        <th style="color:black;font-size: 14px; font-family:Helvetica ">Product Name</th>
                        <th style="color:black;font-size: 14px; font-family:Helvetica ">Description</th>
                        <th style="color:black;font-size: 14px; font-family:Helvetica ">Created at</th>
                        <th style="color:black;font-size: 14px; font-family:Helvetica ">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr v-for="review in filtersearch" :key="review.id">
                        <td> {{ review.name }} </td>
                        <td><img :src="review.image" id="em_photo"></td>
                        <td>{{ review.product_name }}</td>
                        <td>{{ review.description }}</td>
                        <td>{{ review.created_at }}</td>
            <td>
   

 <a @click="deleteSupplier(review.id)" class="btn btn-sm btn-danger"><font color="#ffffff">Delete</font></a>
            </td>
                      </tr>
                    
                    </tbody>
                  </table>
                </div>
                <div class="card-footer"></div>
              </div>
            </div>
          </div>
          <!--Row-->


   
  </div>


</template>



<script type="text/javascript">
  
  export default {
    created(){
      if (!User.loggedIn()) {
        this.$router.push({name: '/'})
      }
    },
    data(){
      return{
        reviews:[],
        searchTerm:''
      }
    },
    computed:{
      filtersearch(){
      return this.reviews.filter(review => {
         return review.name.match(this.searchTerm)
      }) 
      }
    },
 
  methods:{
    allReview(){
      axios.get('/api/review/')
      .then(({data}) => (this.reviews = data))
      .catch()
    },
  deleteSupplier(id){
             Swal.fire({
              title: 'Are you sure?',
              text: "You won't be able to revert this!",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
              if (result.value) {
                axios.delete('/api/review/'+id)
               .then(() => {
                this.reviews = this.reviews.filter(review => {
                  return review.id != id
                })
               })
               .catch(() => {
                this.$router.push({name: 'review'})
               })
                Swal.fire(
                  'Deleted!',
                  'Your file has been deleted.',
                  'success'
                )
              }
            })

  } 

  },
  created(){
    this.allReview();
  } 
  

  } 
</script>


<style type="text/css">
  #em_photo{
    height: 40px;
    width: 40px;
  }
</style>