<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h1 class="text-center mt-3">Add Ingredient</h1>
            </div>
        </div>
            <div class="row justify-content-center">
                <div class="col-sm-8 border border-secondary mt-3">
                    <form action="/ingredients/addingredient/add" method="POST">
                        <input type="hidden" name="_token" :value="csrfToken" />
                        <div class="form-group">
                            <label class="mt-3" for="ingredientName">Ingredient Name</label>
                            <input type="text" required  class="form-control" name="ingredientName" id="ingredientName" aria-describedby="ingredient" placeholder="Enter Ingredient Name">
                        </div>
                          <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text"  class="form-control" name="description" id="description" aria-describedby="description" placeholder="Enter a Description">
                        </div>
                        <div class="form-group">
                            <label for="unitCost">Unit Cost</label>
                            <input type="number" step="any" required class="form-control" name="unitCost" id="unitCost" aria-describedby="unitCost" placeholder="Enter Unit Cost">
                        </div>
                        <div class="form-group">
                            <label for="unitWeightOz">Unit Weight in Oz</label>
                            <input required type="number" step="any" class="form-control" name="unitWeightOz" id="unitWeightOz" aria-describedby="unitWeightOz" placeholder="Enter Unit Weight in Oz">
                        </div>
                        <div class="form-group">
                            <label for="vendor">Vendor</label>
                            <select required type="number"  class="form-control" name="vendorID" id="vendorID" aria-describedby="vendor"> 
                                <option v-for="vendor in vendors" :key="vendor.id" :value="vendor.id">{{vendor.vendor}}</option>

                            </select>
                        </div>
                        <div class="text-center mb-4">
                            <button type="submit" value="submit" class="btn btn-success">Add Ingredient</button>
                            <a class="btn btn-warning text-white" href="/ingredients">Cancel</a>
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
  props: ["csrfToken", 
            "vendors"],
  methods: {
      
      
    
  },
  created() {
    console.log("Component mounted.");
  },
};
</script>