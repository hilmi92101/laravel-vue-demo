<script>
    export default {


        mounted() {
            console.log('Component mounted.');

            
        }, 

        created() { 


        	console.log("Component created!"); 

        	var self = this;


        	axios.get('/demo/axios')
        		.then(function (response) {

				    // handle success
				    console.log(response.data);
				    console.log(response.data.length);

				    self.users = response.data;
				    self.totalUsers = response.data.length;

			  	})
		  		.catch(function (error) {

				    // handle error
				    //console.log(error);


		  	});


    	},

        data: function(){

	    	return {

	    		users: [],
	    		totalUsers: null,
	    		

	    	}
	    }, 
    }
</script>

<template>
    <div class="container">

		<p>Total Users: {{ totalUsers }}</p>
        <ul>
            <li v-for="(user, index) in users">{{ user.name }}</li>
        </ul>
    </div>
</template>
