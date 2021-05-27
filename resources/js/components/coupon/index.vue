

<template>
  
  <div>

<div class="col-lg-12">
 <div class="row">
 
 
   <input type="text" v-model="searchTerm" class="form-control" style="width: 200px;" placeholder="Search Here">
  

  
  <router-link to="/store-employee" class="btn btn" style="background-color: #e7c400; color:white; margin: 0px 5px 0px 5px;"><i class="fas fa-plus-circle" style="color:white"></i> Add New </router-link>


 </div>
</div>
<br>

   <div class="row">
            <div class="col-lg-12 mb-4">
              <!-- Simple Tables -->
              <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Coupons List</h6>
                </div>
                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                       
                        <th style="color:black;font-size: 14px; font-family:Helvetica ">Name</th>
                        <th style="color:black;font-size: 14px; font-family:Helvetica ">Code</th>
                        <th style="color:black;font-size: 14px; font-family:Helvetica ">Type</th>
                        <th style="color:black;font-size: 14px; font-family:Helvetica ">Value</th>
                        <th style="color:black;font-size: 14px; font-family:Helvetica ">Description</th>
                        <th style="color:black;font-size: 14px; font-family:Helvetica ">Created at</th>
                        <th style="color:black;font-size: 14px; font-family:Helvetica ">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr v-for="coupon in filtersearch" :key="coupon.id">
                       
                        <td> {{ coupon.name }} </td>
                        <td>{{coupon.code}}</td>
                        <td>{{ coupon.coupon_type }}</td>
                        <td>{{ coupon.coupon_amount }}</td>
                        <td>{{coupon.description}}</td>
                        <td>{{ coupon.created_at }}</td>
            <td>
   

 <a @click="deleteCoupon(coupon.id)" style="font-size: 12px;" class="btn btn-sm btn-danger"><font color="#ffffff">Delete</font></a>
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
        coupons:[],
        searchTerm:''
      }
    },
    computed:{
      filtersearch(){
      return this.coupons.filter(coupon => {
         return coupon.name.match(this.searchTerm)
      }) 
      }
    },
 
  methods:{
    allCoupon(){
      axios.get('/api/coupon/')
      .then(({data}) => (this.coupons = data))
      .catch()
    },
   


  deleteCoupon(id){
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
                axios.delete('/api/coupon/'+id)
               .then(() => {
                this.coupons = this.coupons.filter(coupon => {
                  return coupon.id != id
                })
               })
               .catch(() => {
                this.$router.push({name: 'coupon'})
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
    this.allCoupon();
  } 
  

  } 
</script>


<style type="text/css">
  #em_photo{
    height: 40px;
    width: 40px;
  }
</style>