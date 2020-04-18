<template>
    <div class="container">

    	<h1>Data Property</h1>

        <p>Name: {{ name }}</p>
        <p class="example">Age: {{ age }}</p>

        <button class="btn btn-primary" @click="addAge">Add Age</button>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },

        data: function(){

	    	return {

	    		name: 'Developer',
	    		age: 28,

	    	}
	    }, 

	    methods: {

	    	addAge: function(){

				this.age++;

			}
	    }
    }
</script>

<style scoped>
	.example {
	  color: red;
	}
</style>
