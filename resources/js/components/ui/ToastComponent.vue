<template>
    <div class="container">
        
        <button class="btn btn-success" @click="successMessage">Success Message</button>
    </div>
</template>

<script>

	

    export default {
        mounted() {
        	
            console.log('Component mounted.');


        },


        methods: {
	        successMessage: function(){

	        	this.$toasted.show('Successfully Registered').goAway(1500);
	        	Vue.toasted.show('Successfully Registered').goAway(1500);
	        	

	        },
		}
    }
</script>
