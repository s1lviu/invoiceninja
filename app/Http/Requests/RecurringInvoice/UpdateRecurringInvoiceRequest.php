<?php

namespace App\Http\Requests\RecurringInvoice;

use App\Http\Requests\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rule;

class UpdateRecurringInvoiceRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

    public function authorize() : bool
    {

        return auth()->user()->can('edit', $this->recurring_invoice);

    }


    public function rules()
    {
        return [
            'documents' => 'mimes:png,ai,svg,jpeg,tiff,pdf,gif,psd,txt,doc,xls,ppt,xlsx,docx,pptx',
        ];
    }
    
}