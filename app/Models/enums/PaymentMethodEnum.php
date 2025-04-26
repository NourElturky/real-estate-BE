<?php

namespace App\Models\enums;

enum PaymentMethodEnum: string {
    case CASH = 'cash';
    case CREDIT_CARD = 'credit_card';
    case BANK_TRANSFER = 'bank_transfer';
    case CHECK = 'check';
    case INSTALLMENT = 'installment';
}
