<?php

    namespace App;

    use Illuminate\Notifications\Notifiable;
    use Illuminate\Database\Eloquent\SoftDeletes;
    use Illuminate\Foundation\Auth\User as Authenticatable;
    use Laravel\Cashier\Billable;

    class User extends Authenticatable
    {
        use Notifiable, SoftDeletes;
        use Billable;

        protected $guarded = [
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];

        public function orders()
        {
            return $this->hasMany(Order::class);
        }

        public function activate($customerID)
        {
           return $this.update([
                'mollie_id' => $customerId,
                'mollie_active' => true
            ]);
        }

        public function isSubscribed()
        {
            return !! $this->mollie_active;

        }

    }

   
