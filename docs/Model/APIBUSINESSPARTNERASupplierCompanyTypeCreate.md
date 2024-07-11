# # APIBUSINESSPARTNERASupplierCompanyTypeCreate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**supplier** | **string** | Account Number of Supplier |
**company_code** | **string** |  |
**authorization_group** | **string** | Authorization Group | [optional]
**payment_blocking_reason** | **string** | Block Key for Payment | [optional]
**supplier_is_blocked_for_posting** | **bool** | Posting block for company code | [optional]
**accounting_clerk** | **string** | Accounting Clerk Abbreviation | [optional]
**accounting_clerk_fax_number** | **string** | Accounting clerk&#39;s fax number at the customer/vendor | [optional]
**accounting_clerk_phone_number** | **string** | Accounting clerk&#39;s telephone number at business partner | [optional]
**supplier_clerk** | **string** |  | [optional]
**supplier_clerk_url** | **string** | Internet address of partner company clerk | [optional]
**payment_methods_list** | **string** | List of Respected Payment Methods | [optional]
**payment_reason** | **string** |  | [optional]
**payment_terms** | **string** | Key for Terms of Payment | [optional]
**clear_customer_supplier** | **bool** | Indicator: Clearing between customer and vendor? | [optional]
**is_to_be_locally_processed** | **bool** | Indicator: Local Processing? | [optional]
**item_is_to_be_paid_separately** | **bool** | Indicator: Pay All Items Separately? | [optional]
**payment_is_to_be_sent_by_edi** | **bool** | Indicator: Send Payment Advices by EDI | [optional]
**house_bank** | **string** | Short Key for a House Bank | [optional]
**check_paid_duration_in_days** | **float** | Probable Time Until Check Is Paid | [optional]
**currency** | **string** | Currency Key | [optional]
**bill_of_exch_lmt_amt_in_co_code_crcy** | **float** | Bill of Exchange Limit (in Local Currency) | [optional]
**supplier_clerk_idby_supplier** | **string** | Our account number with the vendor | [optional]
**reconciliation_account** | **string** | Reconciliation Account in General Ledger | [optional]
**interest_calculation_code** | **string** |  | [optional]
**interest_calculation_date** | **string** | Key Date of Last Interest Calculation | [optional]
**intrst_calc_frequency_in_months** | **string** | Interest Calculation Frequency in Months | [optional]
**supplier_head_office** | **string** | Head Office Account Number | [optional]
**alternative_payee** | **string** | Account number of the alternative payee | [optional]
**layout_sorting_rule** | **string** | Key for Sorting According to Assignment Numbers | [optional]
**apar_tolerance_group** | **string** | Tolerance Group for Business Partner/G/L Account | [optional]
**supplier_certification_date** | **string** |  | [optional]
**supplier_account_note** | **string** | Memo | [optional]
**withholding_tax_country** | **string** | Withholding Tax Country/Region Key | [optional]
**deletion_indicator** | **bool** | Deletion Flag for Master Record (Company Code Level) | [optional]
**cash_planning_group** | **string** |  | [optional]
**is_to_be_checked_for_duplicates** | **bool** | Check Flag for Double Invoices or Credit Memos | [optional]
**minority_group** | **string** |  | [optional]
**supplier_account_group** | **string** | Supplier Account Group | [optional]
**to_company_text** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERASupplierCompanyTypeCreateToCompanyText**](APIBUSINESSPARTNERASupplierCompanyTypeCreateToCompanyText.md) |  | [optional]
**to_supplier** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERASupplierTypeCreate**](APIBUSINESSPARTNERASupplierTypeCreate.md) |  | [optional]
**to_supplier_dunning** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERASupplierCompanyTypeCreateToSupplierDunning**](APIBUSINESSPARTNERASupplierCompanyTypeCreateToSupplierDunning.md) |  | [optional]
**to_supplier_with_holding_tax** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERASupplierCompanyTypeCreateToSupplierWithHoldingTax**](APIBUSINESSPARTNERASupplierCompanyTypeCreateToSupplierWithHoldingTax.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
