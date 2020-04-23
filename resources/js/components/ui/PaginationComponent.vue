<template>
    <div class="container">

    	<h1>{{ title }}</h1>

    	<ul>
		    <li v-for="user in users">{{ user.name }}</li>
		</ul>

		<paginate
			:page-count="10"
			:page-range="3"
			:margin-pages="2"
			:click-handler="clickCallback"
			:prev-text="'Prev'"
			:next-text="'Next'"
			:container-class="'pagination'"
			:page-class="'page-item'"
			:prev-link-class="'page-link'"
			:next-link-class="'page-link'"
			:page-link-class="'page-link'"

		>
		</paginate>



		
        
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.');

            this.initialCall();
        },

        props: ['title'],

        data: function(){

	    	return {

	    		clickedPageNum: null,
	    		users:null
	    		

	    	}
	    },

        methods: {
            clickCallback: function(pageNum){
                //console.log(pageNum);

                this.clickedPageNum = pageNum;

                this.dbCall();
            },

            dbCall: function(){

                var data = {

                	clickedPageNum:this.clickedPageNum,

                }

                const vm = this;

                axios.post('/users/paginate', data)
	        		.then(function (response) {

					    //console.log(response.data);
					    //console.log(response.data.users);

					    vm.users = response.data.users;

				  	})
			  		.catch(function (error) {

					    //console.log(error);


			  	});
            }, 
            initialCall: function(){

            	var data = {

                	clickedPageNum:1,

                }

                const vm = this;

                axios.post('/users/paginate', data)
	        		.then(function (response) {

					    //console.log(response.data);
					    //console.log(response.data.users);

					    vm.users = response.data.users;

				  	})
			  		.catch(function (error) {

					    //console.log(error);


			  	});

            }

        }
    }
</script>




