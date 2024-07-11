# # APIBUSINESSPARTNERASupplierPurchasingOrgTypeCreate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**supplier** | **string** | Supplier&#39;s Account Number |
**purchasing_organization** | **string** | Purchasing Organization |
**automatic_evaluated_rcpt_settlmt** | **bool** | Automatic evaluated receipt settlement for return items | [optional]
**calculation_schema_group_code** | **string** | Group for Calculation Schema (Supplier) | [optional]
**deletion_indicator** | **bool** | Deletion Indicator for Supplier at Purchasing Level | [optional]
**evald_receipt_settlement_is_active** | **bool** | Evaluated Receipt Settlement (ERS) | [optional]
**incoterms_classification** | **string** | Incoterms (Part 1) | [optional]
**incoterms_transfer_location** | **string** |  | [optional]
**incoterms_version** | **string** |  | [optional]
**incoterms_location1** | **string** |  | [optional]
**incoterms_location2** | **string** |  | [optional]
**incoterms_sup_chn_loc1_addl_uuid** | **string** |  | [optional]
**incoterms_sup_chn_loc2_addl_uuid** | **string** |  | [optional]
**incoterms_sup_chn_dvtg_loc_addl_uuid** | **string** |  | [optional]
**intrastat_crs_border_tr_mode** | **string** | Mode of Transport at the Border (Intrastat) | [optional]
**invoice_is_goods_receipt_based** | **bool** | Indicator: GR-Based Invoice Verification | [optional]
**invoice_is_mm_service_entry_based** | **bool** | Indicator for Service-Based Invoice Verification | [optional]
**material_planned_delivery_durn** | **float** | Planned Delivery Time in Days | [optional]
**minimum_order_amount** | **float** |  | [optional]
**payment_terms** | **string** | Key for Terms of Payment | [optional]
**planning_cycle** | **string** |  | [optional]
**pricing_date_control** | **string** | Price Determination (Pricing) Date Control | [optional]
**prod_stock_and_sls_data_transf_prfl** | **string** | Profile for transferring material data via IDoc PROACT | [optional]
**product_unit_group** | **string** | Unit of Measure Group | [optional]
**pur_ord_auto_generation_is_allowed** | **bool** | Automatic Generation of Purchase Order Allowed | [optional]
**purchase_order_currency** | **string** | Purchase order currency | [optional]
**purchasing_group** | **string** |  | [optional]
**purchasing_is_blocked_for_supplier** | **bool** | Purchasing block at purchasing organization level | [optional]
**rounding_profile** | **string** |  | [optional]
**shipping_condition** | **string** |  | [optional]
**suplr_discount_in_kind_is_granted** | **bool** |  | [optional]
**suplr_invc_reval_is_allowed** | **bool** | Revaluation allowed | [optional]
**suplr_is_rlvt_for_settlmt_mgmt** | **bool** | Indicator: Relevant for Settlement Management | [optional]
**suplr_purg_org_is_rlvt_for_price_detn** | **bool** | Indicator: \&quot;relev. to price determination (vend. hierarchy) | [optional]
**supplier_abc_classification_code** | **string** |  | [optional]
**supplier_account_number** | **string** | Our account number with the supplier | [optional]
**supplier_is_returns_supplier** | **bool** | Indicates whether supplier is returns supplier | [optional]
**supplier_phone_number** | **string** | Supplier&#39;s Telephone Number | [optional]
**supplier_resp_sales_person_name** | **string** | Responsible Salesperson at Supplier&#39;s Office | [optional]
**supplier_confirmation_control_key** | **string** | Confirmation Control Key | [optional]
**is_order_ackn_rqd** | **bool** | Order Acknowledgment Requirement | [optional]
**authorization_group** | **string** | Authorization Group | [optional]
**supplier_account_group** | **string** | Supplier Account Group | [optional]
**to_partner_function** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERASupplierPurchasingOrgTypeCreateToPartnerFunction**](APIBUSINESSPARTNERASupplierPurchasingOrgTypeCreateToPartnerFunction.md) |  | [optional]
**to_purchasing_org_text** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERASupplierPurchasingOrgTypeCreateToPurchasingOrgText**](APIBUSINESSPARTNERASupplierPurchasingOrgTypeCreateToPurchasingOrgText.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
