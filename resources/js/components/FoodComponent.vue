<template>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <a href="/"><i class="btn btn-warning fa fa-chevron-left d-inline"></i></a>
                
                <div class="card mt-4">
                    <div class="card-header">
                        
                        <div class="dropdown text-right">
                            <button class="dropdown-toggle btn btn-secondary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="/foods/addfood">Add Food Item<i class="pl-1 fa fa-plus"></i></a>
                                <a href="/vendors" class="dropdown-item">Vendors <i class="pl-1 fa fa-users"></i></a>
                                <a href="/ingredients" class="dropdown-item">Ingredients <i class="fa fa-cutlery"></i></a>
                            </div>
                        </div>
                        <h1 class="text-center">Junction Food List</h1>
                    </div>
                    <div v-for="Food in foods" :key="Food.id" class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4>{{ Food.name }}</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 d-flex mb-5">
                                <div class="col-sm-3">
                                    <label><strong>Cost:</strong></label>
                                    <p class="d-inline"> {{ '$' +Food.cost }}</p>
                                </div>
                                 <div class="col-sm-3">
                                    <label><strong>Retail:</strong></label>
                                    <p class="d-inline"> {{ '$' + Food.retail }}</p>
                                </div>
                                 <div class="col-sm-3">
                                     <label><strong>Profit:</strong></label>
                                    <p class="d-inline"> {{ '$' + calculateProfit(Food) }}</p>
                                </div>
                                 <div class="col-sm-3">
                                     <label><strong>Margin:</strong></label>
                                    <p class="d-inline"> {{ '$' + calculateMargin(Food) + '%' }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary">Edit</button>
                                <!-- <button type="submit" class="btn btn-danger" v-on:click='deleteFood(Food.id)'>Delete</button> -->
                                <a class="btn btn-danger" :href="'/deletefood/'+ Food.id">Delete</a>
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
  props: ["foods"],
  methods: {
    calculateProfit(Food) {
      let profit = Food.retail - Food.cost;
      return profit;
    },
    calculateMargin(Food) {
      let margin = ((Food.retail - Food.cost) / Food.retail) * 100;
      return margin.toFixed(2);
    },
    
  },
  created() {
    console.log("Component mounted.");
    // this.getFoodItems()
  },
};
</script>