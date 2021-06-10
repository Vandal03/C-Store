<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h1 class="text-center">Add Vendor</h1>
            </div>
        </div>
            <div class="row justify-content-center">
                <div class="col-sm-8 border border-secondary mt-3">
                    <form action="/vendors/addvendor/add" method="POST">
                        <input type="hidden" name="_token" :value="csrfToken" />
                        <div class="form-group">
                            <label class="mt-3" for="vendorName">Vendor Name</label>
                            <input type="text" required v-model="vendor.vendorName" class="form-control" name="vendorName" id="vendorName" aria-describedby="vendor" placeholder="Enter Vendor Name">
                        </div>
                        <div class="form-group">
                            <label for="pocName">Point of Contact</label>
                            <input type="text" v-model="vendor.poc" class="form-control" name="pocName" id="pocName" aria-describedby="poc" placeholder="Enter Point of Contact">
                        </div>
                        <div class="form-group">
                            <label for="phoneNumber">Phone Number</label>
                            <input type="number"  v-model="vendor.phoneNumber" class="form-control" name="phoneNumber" id="phoneNumber" aria-describedby="phone" placeholder="Enter Phone Number">
                        </div>
                        <button type="submit" value="submit" class="btn btn-success mb-4">Add Vendor</button>
                    </form>
                </div>
            </div>
    </div>
</template>

<script>
export default {
  data() {
    return {
        vendor: {
            vendorName: "",
            poc: "",
            phoneNumber: ""
        },
        
    };
  },
  props: ["csrfToken"],
  methods: {
     
    
  },
  created() {
    console.log("Component mounted.");
  },
};
</script>