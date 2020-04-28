<template>
    <div class="container">

    	<vue2-simple-datatable :data="dbdata" :columns="tcolumns"  />
        
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },


        created() { 


        	console.log("Component created!"); 

        	var self = this;


        	axios.get('/demo/axios')
        		.then(function (response) {

				    // handle success
				    console.log(response.data);

				    self.dbdata = response.data;

			  	})
		  		.catch(function (error) {

				    // handle error
				    //console.log(error);


		  	});


    	},

        data() {
			return {
				dbdata: [],
			    tcolumns: [ 'name', 'email' ],
			 
			    // optional:
			    /*initialSearch: {
			      b: 'y'
			    }*/
			};
		},
    }
</script>
