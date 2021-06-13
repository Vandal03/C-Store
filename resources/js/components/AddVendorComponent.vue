<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h1 class="text-center mt-4">Add Vendor</h1>
            </div>
        </div>
            <div class="row justify-content-center">
                <div class="col-sm-8 border border-secondary mt-3">
                    <form action="/vendors/addvendor/add" method="POST">
                        <input type="hidden" name="_token" :value="csrfToken" />
                        <div class="form-group">
                            <label class="mt-3" for="vendorName">Vendor Name</label>
                            <input  type="text" required  class="form-control" name="vendorName" id="vendorName" aria-describedby="vendorName" placeholder="Enter Vendor Name">
                        </div>
                        <div class="form-group">
                            <label for="pointOfContact">Point of Contact</label>
                            <input type="text"  class="form-control" name="pointOfContact" id="pointOfContact" aria-describedby="pointOfContact" placeholder="Enter Point of Contact">
                        </div>
                        <div class="form-group">
                            <label for="phoneNumber">Phone Number</label>
                            <input type="number"  class="form-control" name="phoneNumber" id="phoneNumber" aria-describedby="phoneNumber" placeholder="Enter Phone Number">
                        </div>
                        <div class="mb-4 text-center">
                        <button type="submit" value="submit" class="btn btn-success">Add Vendor</button>
                        <a class="btn btn-warning text-white"  href="/vendors">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
    </div>
</template>

<script>
export default {
  data() {
    return {
       
        
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