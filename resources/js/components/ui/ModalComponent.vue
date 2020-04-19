<template>
    <div class="container">

    	<button class="btn btn-success" @click="show">Show</button>
    	<button class="btn btn-success" @click="showCustom">Show Custom Modal</button>
    	
    	<modal name="hello-world" height="650px" :scrollable="true">
		  	<div class="container">
		  		<h2 class="mt-3">Stacked form</h2>
				<form>
				    <div class="form-group">
				        <label for="email">Email:</label>
				        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" v-model="email">
				    </div>
				    <div class="form-group">
				        <label for="pwd">Password:</label>
				        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
				    </div>
				    <div class="form-group form-check">
				        <label class="form-check-label">
				            <input class="form-check-input" type="checkbox" name="remember"> Remember me
				        </label>
				    </div>
				    <button type="submit" class="btn btn-primary" @click.prevent="submitCustom">Submit</button>
				    <button class="btn btn-danger" @click.prevent="hideCustom">Cancel</button>
				</form>
		  	</div>
		</modal>

		<v-dialog/>

		
        
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },

        data: function(){

	    	return {

	    		email: 'hilmi@gmail.com',
	    		

	    	}
	    },

		methods: {
			show () {
				this.$modal.show('dialog', {
				    title: 'Alert!',
				    text: 'You are too awesome',
				    buttons: [{
				            title: 'Deal with it',
				            handler: () => {
				                alert('Woot!')
				            }
				        },
				        {
				            title: '', // Button title
				            default: true, // Will be triggered by default if 'Enter' pressed.
				            handler: () => {} // Button click handler
				        },
				        {
				            title: 'Close'
				        }
				    ]
				});
			},

			hide () {
				this.$modal.hide('hello-world');
			},


			showCustom () {
				this.$modal.show('hello-world');
			},

			hideCustom () {
				this.$modal.hide('hello-world');
			},

			submitCustom () {
				
				console.log(this.email);
			},
			
		}
    }
</script>
