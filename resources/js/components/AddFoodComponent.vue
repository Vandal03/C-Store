<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h1 class="text-center mt-3">Add Food Item</h1>
            </div>
        </div>
            <div class="row justify-content-center">
                <div class="col-sm-8 border border-secondary mt-3">
                    <form action="/foods/addfood/add" method="POST">
                        <input type="hidden" name="_token" :value="csrfToken" />
                        <div class="form-group">
                            <label class="mt-3" for="foodName">Food Name</label>
                            <input class="form-control" type="text" required placeholder="Please Enter the Food's Name" name="foodName" id="foodName" aria-describedby="food">
                        </div>
                        <div class="form-group">
                            <label class="mt-3" for="ingredientSelect">Select Ingredients - Current Cost: ${{calculateCost(selectedIngredients, cost)}}</label>
                            <select multiple v-model="selectedIngredients" class="form-control w-50" type="" required name="ingredientSelect" id="ingredientSelect" aria-describedby="indgredient">
                                <option v-for="ingredient in ingredients" :key="ingredient.id" :value="ingredient.id+',' + ingredient.unit_cost">{{ ingredient.name + " | " + ingredient.vendor + " | " + "$" + ingredient.unit_cost }}</option>
                            </select>
                        </div>
                        <div class="text-center mb-4">
                            <button type="submit" value="submit" class="btn btn-success">Add Food Item</button>
                            <a class="btn btn-warning text-white" href="/foods">Cancel</a>
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
        selectedIngredients: [],
        cost: 0
        
        
    };
  },
  props: ["csrfToken",
            "ingredients"],
  methods: {
      calculateCost(selectedIngredients, cost) {
          selectedIngredients.forEach(function(ingredient) {
              let price = ingredient.split(",");
              cost += parseFloat(price[1]);
          });
          return cost.toFixed(2);
      }
      
    
  },
  created() {
    console.log("Component mounted.");
  },
};
</script>