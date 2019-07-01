<template>
    <div class="form-group">
                <label for="generalCoursePurchase">Choose your subscription:</label>
                <select class="form-control" id="generalCoursePurchase" v-model="product">
                    <option>Unlimited VIP Pass: €{{$product['price']}}</option>
                    <option>Season Pass: €{{$product['price']}}</option>
                    <option>One Month Access: €{{$product['price']}}</option>
                    <option>One Lesson Access: €{{$product['price']}}</option>
                </select>
                    <form action="/subscriptions" method="POST">
                         {{ csrf_token() }}
                            <button type="button" class="btn btn-primary" @click.prevent="buy">Subscribe</button>
                    </form> 
    </div>   
</template>

<script>
    export default {

         data() {
          return {
             formData: {
             $email: '',
              product: ''
          }};

      props: ['products'],

     
      },

      created() {
          
      axios.post('/subscriptions', this.$data)
        .then(response => alert('Complete! Thanks for your payment!'));
      
      },

        methods: {
            buy() {


            }
        },
    } 
</script>
