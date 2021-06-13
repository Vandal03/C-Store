<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h1 class="text-center">Edit Ingredient</h1>
            </div>
        </div>
            <div class="row justify-content-center">
                <div class="col-sm-8 border border-secondary mt-3">
                    <form :action="'/ingredients/editingredient/edit/' + ingredient.id" method="POST">
                        <input type="hidden" name="_token" :value="csrfToken" />
                        <div class="form-group">
                            <label class="mt-3" for="ingredientName">Ingredient Name</label>
                            <input type="text" required  :value="ingredient.name" class="form-control" name="ingredientName" id="ingredientName" aria-describedby="ingredient" placeholder="Enter Ingredient Name">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text"   :value="ingredient.unit_of_measure" class="form-control" name="description" id="description" aria-describedby="description" placeholder="Enter a Description">
                        </div>
                        <div class="form-group">
                            <label for="unitCost">Unit Cost</label>
                            <input type="number" step="any" required :value="ingredient.unitcost" class="form-control" name="unitCost" id="unitCost" aria-describedby="unitCost" placeholder="Enter Unit Cost">
                        </div>
                        <div class="form-group">
                            <label for="unitWeightOz">Unit Weight in Oz</label>
                            <input type="number" step="any" required :value="ingredient.unitweight" class="form-control" name="unitWeightOz" id="unitWeightOz" aria-describedby="unitWeightOz" placeholder="Enter Unit Weight in Oz">
                        </div>
                        <div class="form-group">
                            <label for="vendor">Vendor</label>
                            <select required type="number" class="form-control" name="vendorID" id="vendorID" aria-describedby="vendor">
                                <option v-for="vendor in vendors" :key="vendor.id" :value="vendor.id">{{vendor.vendor}}</option>

                            </select>
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
    return {
        
        }
        
   
  },
  props: ["csrfToken", 
            "ingredient",
            "vendors"],
  methods: {
      
    
  },
  created() {
    console.log("Component mounted.");
  },
};
</script>