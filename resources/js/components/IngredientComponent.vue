<template>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-10">
                 <a  href="/Foods"><i class="btn btn-warning fa fa-chevron-left"></i></a>
                <div class="card mt-4">
                    <div class="card-header">
                       
                        <div class="dropdown text-right">
                            <button class="dropdown-toggle btn btn-secondary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="/ingredients/addingredient">Add Ingredient <i class="fa fa-cutlery"></i></a>
                            </div>
                        </div>
                        <h1 class="text-center">Junction Ingredient List</h1>
                    </div>
                    <div v-for="ingredient in ingredients" :key="ingredient.id" class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4>{{ ingredient.name + " - " + ingredient.description }}</h4>
                                <h6>{{ ingredient.vendor }}</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 d-flex mb-5">
                                <div class="col-sm-6">
                                    <label><strong>Unit Cost: </strong></label>
                                    <p class="d-inline"> {{ '$' + ingredient.unit_cost }}</p>
                                </div>
                                 <div class="col-sm-6">
                                    <label><strong>Cost per Oz: </strong></label>
                                    <p class="d-inline"> {{ "$" + calculateCostPerOz(ingredient) }}</p>
                                </div>
                                
                            </div>
                        
                        </div>
                        <div class="row">
                            <div class="col-sm-6 ml-3">
                                     <label><strong>Unit Weight: </strong></label>
                                    <p class="d-inline"> {{ ingredient.unit_weight_oz + ' ' + 'Oz'}}</p>
                                </div>
                               
                        </div>
                        <div class="row mt-4">
                            <div class="col-sm-12">
                                <a :href="'/ingredients/editingredient/' + ingredient.id" class="btn btn-primary">Edit</a>
                                <a class="btn btn-danger" :href="'/ingredients/deleteingredient/'+ ingredient.id">Delete</a>
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
  props: ["ingredients"],
  methods: {
      calculateCostPerOz(ingredient) {
          let costPerOz = ingredient.unit_cost / ingredient.unit_weight_oz;
          return costPerOz.toFixed(2);
      }
    
  },
  created() {
    console.log("Component mounted.");
  },
};
</script>