<?php


interface PaymentProcessor {
   public function processPayment(float $amount): bool;
   public function refundPayment(float $amount): bool;
}

abstract class OnlinePaymentProcessor implements PaymentProcessor {

   public function __construct(
      protected string $apikey
   ) {}

   public function processPayment(float $amount): bool {

   }
   public function refundPayment(float $amount): bool {

   }


}

class StripeProcessor extends OnlinePaymentProcessor {}
class PaypalProcessor extends OnlinePaymentProcessor {}

$processor = new StripeProcessor("KEY_");