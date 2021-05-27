 

<template>
  
  <div>


<br>
   
<div class="row" style="margin-left: 1px; margin-bottom: -15px;">
<router-link to="/product" class="btn btn-danger" style="height: 35px; ">All </router-link>
<router-link to="/product" class="btn btn-default btn1" style="height: 35px;">Approved </router-link>
<router-link to="/product" class="btn btn-default btn1" style="height: 35px;">Pending </router-link>
<router-link to="/unapproved" class="btn btn-default btn1" style="height: 35px;">UnApproved </router-link>
</div>
   
 <div style="float:right; margin-top: -17px;">
  <router-link to="/store-product" class="btn btn-danger" style="height: 35px; font-family: Helvetica">Add Product </router-link>
   </div>
 

<br>

   <div class="row">
            <div class="col-lg-12 mb-4">
              <!-- Simple Tables -->
              <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold" style="color:#181818; font-family:Helvetica ">Product Approval Listing</h6>
                </div>
                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        
                      
                        <th col="15%" style="color:black;font-size: 14px; font-family:Helvetica ">Image</th>
                        <th style="color:black;font-size: 14px; font-family:Helvetica ">Name</th>
                        <th style="color:black;font-size: 14px; font-family:Helvetica ">Price(RM)</th>
                        <th style="color:black;font-size: 14px; font-family:Helvetica ">Category</th>
                        
                        
                        <th style="color:black;font-size: 14px; font-family:Helvetica ">Merchant</th>
                        <th style="color:black;font-size: 14px; font-family:Helvetica ">Mall</th>
                          <th style="color:black;font-size: 14px; font-family:Helvetica ">Status</th>
                          <th style="color:black;font-size: 14px; font-family:Helvetica ">Created At</th>
                        <th style="color:black;font-size: 14px; font-family:Helvetica ">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr v-for="product in filtersearch" :key="product.id">
                        <td ><img style="height: 40px; width 100px;" :src="product.image" id="em_photo"></td>
                        <td style="font-family:Helvetica font-size: 12px;"> {{ product.product_name }} </td>
                        <td style="font-family:Helvetica font-size: 12px;">{{ product.selling_price }}</td>
                        <td style="font-family:Helvetica font-size: 12px;">{{ product.category_name }}</td>
                        <td style="font-family:Helvetica font-size: 12px;">{{ product.name }}</td>
                        <td style="font-family:Helvetica font-size: 12px;"> {{ product.product_code }} </td>
                        
                        
                        
                        
                         <td style="font-family:Helvetica font-size: 12px;">{{product.product_type}}</td>
                         <td style="font-family:Helvetica font-size: 12px;">{{ product.created_at }}</td>
            <td>



 <a @click="deleteProduct(product.id)" style="font-size: 12px;" class="btn btn-sm btn-danger"><font color="#ffffff">Delete</font></a>
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
        products:[],
        searchTerm:''
      }
    },
    computed:{
      filtersearch(){
      return this.products.filter(product => {
         return product.product_name.match(this.searchTerm)
      }) 
      }
    },
 
  methods:{
    allProduct(){
      axios.get('/api/product/')
      .then(({data}) => (this.products = data))
      .catch()
    },
  deleteProduct(id){
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
                axios.delete('/api/product/'+id)
               .then(() => {
                this.products = this.products.filter(product => {
                  return product.id != id
                })
               })
               .catch(() => {
                this.$router.push({name: 'product'})
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
    this.allProduct();
  } 
  

  } 
</script>


<style type="text/css">
  #em_photo{
    height: 60px;
    width: 60px;
  }
  
  .btn1{
  border: solid 1px #EBEDEF;
  margin-left: 2px;
  font-family: Helvetica;
  background-color: #FDFEFE;
  }
  btn {
  font-family: Helvetica;
  }
</style>