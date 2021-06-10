<template>
       <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h1 class="text-center">Edit Vendor</h1>
            </div>
        </div>
            <div class="row justify-content-center">
                <div class="col-sm-8 border border-secondary mt-3">
                    <form :action="'/vendors/editvendor/edit/' + vendor.id" method="POST">
                        <input type="hidden" name="_token" :value="csrfToken" />
                        <div class="form-group">
                            <label class="mt-3" for="vendorName">Vendor Name</label>
                            <input type="text" required class="form-control" name="vendorName" id="vendorName" :value='vendor.company' aria-describedby="vendor" >
                        </div>
                        <div class="form-group">
                            <label for="pocName">Point of Contact</label>
                            <input type="text"  class="form-control" name="pocName" id="pocName" aria-describedby="poc" :value='vendor.poc'>
                        </div>
                        <div class="form-group">
                            <label for="phoneNumber">Phone Number</label>
                            <input type="number"  class="form-control" name="phoneNumber" id="phoneNumber" aria-describedby="phone" :value='vendor.phonenumber'>
                        </div>
                        <button type="submit" value="submit" class="btn btn-success mb-4">Save</button>
                    </form>
                </div>
            </div>
    </div>






</template>

<script>
export default {
  data() {
    return {};
  },
  props: ['vendor', 'csrfToken'],
    
  
  methods: {
    
  },
  created() {
    console.log("Component mounted.");
  },
};
</script>