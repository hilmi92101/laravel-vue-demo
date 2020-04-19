<template>
    <div class="container">
        
        <button class="btn btn-success" @click="successMessage">Output Messages</button>
    </div>
</template>

<script>

	

    export default {
        mounted() {
        	
            console.log('Component mounted.');


        },


        methods: {
	        successMessage: function(){

	        	this.$toasted.show('Successfully Registered', { 
					 theme: "toasted-primary", 
					 position: "top-right", 
					 duration : 500,
					 type: 'success',
				});
	        	Vue.toasted.show('Successfully Registered', { 
					 theme: "outline", 
					 position: "top-right", 
					 duration : 500,
					 type: 'info',
				});

				Vue.toasted.show('Successfully Registered', { 
					 theme: "bubble", 
					 position: "top-right", 
					 duration : 500,
					 type: 'error',
				});
	        	

	        },
		}
    }
</script>
