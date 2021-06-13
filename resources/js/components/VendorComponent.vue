<template>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-10">
                 <a  href="/foods"><i class="btn btn-warning fa fa-chevron-left"></i></a>
                <div class="card mt-4">
                    <div class="card-header">
                       
                        <div class="dropdown text-right">
                            <button class="dropdown-toggle btn btn-secondary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="/vendors/addvendor">Add Vendor<i class="pl-1 fa fa-plus"></i></a>
                            </div>
                        </div>
                        <h1 class="text-center">Junction Vendor List</h1>
                    </div>
                    <div v-for="vendor in vendors" :key="vendor.id" class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4>{{ vendor.vendor}}</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 d-flex mb-5">
                                <div class="col-sm-6">
                                    <label><strong>Point of Contact: </strong></label>
                                    <p class="d-inline"> {{ vendor.point_of_contact }}</p>
                                </div>
                                 <div class="col-sm-6">
                                    <label><strong>Phone Number: </strong></label>
                                    <p class="d-inline"> {{ vendor.phone_number }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <a  class="btn btn-primary" :href="'/vendors/editvendor/' + vendor.id">Edit</a>
                                <a class="btn btn-danger" :href="'/deletevendor/'+ vendor.id">Delete</a>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
  data() {
    return {};
  },
  props: ["vendors"],
  methods: {
    
  },
  created() {
    console.log("Component mounted.");
  },
};
</script>