<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h1 class="text-center">Add Ingredient</h1>
            </div>
        </div>
            <div class="row justify-content-center">
                <div class="col-sm-8 border border-secondary mt-3">
                    <form action="/ingredients/addingredient/add" method="POST">
                        <input type="hidden" name="_token" :value="csrfToken" />
                        <div class="form-group">
                            <label class="mt-3" for="ingredientName">Ingredient Name</label>
                            <input type="text" required v-model="ingredient.ingredientName" class="form-control" name="ingredientName" id="ingredientName" aria-describedby="ingredient" placeholder="Enter Ingredient Name">
                        </div>
                        <div class="form-group">
                            <label for="unitCost">Unit Cost</label>
                            <input type="number" v-model="ingredient.unitCost" class="form-control" name="unitCost" id="unitCost" aria-describedby="unitCost" placeholder="Enter Unit Cost">
                        </div>
                        <div class="form-group">
                            <label for="unitWeight">Unit Weight</label>
                            <input type="number"  v-model="ingredient.unitWeight" class="form-control" name="unitWeight" id="unitWeight" aria-describedby="unitWeight" placeholder="Enter Unit Weight">
                        </div>
                        <div class="form-group">
                            <label for="unitOfMeasure">Unit of Measure</label>
                            <input type="text"  v-model="ingredient.unitOfMeasure" class="form-control" name="unitOfMeasure" id="unitOfMeasure" aria-describedby="unitOfMeasure" placeholder="Enter Unit of Measure">
                        </div>
                        <div class="form-group">
                            <label for="vendor">Vendor</label>
                            <select type="number"  v-model="ingredient.vendorID" class="form-control" name="vendorID" id="vendorID" aria-describedby="vendor">
                                <option v-for="vendor in listOptions" :key="vendor.id" :value="vendor.id" @onChange="getID($event)">{{vendor.company}}</option>

                            </select>
                        </div>
                        <button type="submit" value="submit" class="btn btn-success mb-4">Add Ingredient</button>
                    </form>
                </div>
            </div>
    </div>
</template>

<script>
export default {
  data() {
    return {
        ingredient: {
            ingredientName: "",
            unitCost: "",
            unitWeight: "",
            unitOfMeasure: "",
            vendorID: ""
        },
        
    };
  },
  props: ["csrfToken", 
            "listOptions"],
  methods: {
      getID(e) {
          return
      }
    
  },
  created() {
    console.log("Component mounted.");
  },
};
</script>