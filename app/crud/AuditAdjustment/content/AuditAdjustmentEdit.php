
<div class="padding" bm-ui-permission="app.crud.audit_adjustment.edit" login-user="app.loginUser">
    <div class="box">
        <div class="box-header {{audit_adjustmentManager.formData.detail.headerStyle}} non-select">
            <h2>{{audit_adjustmentManager.formData.detail.title}}</h2>
            <small>{{audit_adjustmentManager.formData.detail.subTitle}}</small>
        </div>
        <div class="box-tool">
            <button uib-tooltip="Save" ng-click="audit_adjustmentManager.saveItem(audit_adjustmentManager.editedAuditAdjustment)"
                    	class="btn btn-primary btn-sm"><i class="fa fa-floppy-o"></i></button>
            &nbsp;
            <button uib-tooltip="To List" ng-click="audit_adjustmentManager.showList()"
                    	class="btn btn-default btn-sm"><i class="fa fa-arrow-left"></i></button>
            &nbsp;  &nbsp;  &nbsp;
        </div>
        <div class="box-body ">
            <form>
                <div class="row row-sm">
                    <div class="col-sm-6"><div class="md-form-group"> <input class='md-input' id='txtaudit_id' ng-model='audit_adjustmentManager.editedAuditAdjustment.audit_id' required><label class='non-select'>Audit Id</label></div>
<div class="md-form-group"> <input class='md-input' id='txtdebit' ng-model='audit_adjustmentManager.editedAuditAdjustment.debit' required><label class='non-select'>Debit</label></div>
<div class="md-form-group"> <input class='md-input' id='txtprior_debit' ng-model='audit_adjustmentManager.editedAuditAdjustment.prior_debit' required><label class='non-select'>Prior Debit</label></div>
<div class="md-form-group"> <input class='md-input' id='txtjustification' ng-model='audit_adjustmentManager.editedAuditAdjustment.justification' required><label class='non-select'>Justification</label></div>
</div>
<div class="col-sm-6"><div class="md-form-group"> <input class='md-input' id='txtaccount_id' ng-model='audit_adjustmentManager.editedAuditAdjustment.account_id' required><label class='non-select'>Account Id</label></div>
<div class="md-form-group"> <input class='md-input' id='txtcredit' ng-model='audit_adjustmentManager.editedAuditAdjustment.credit' required><label class='non-select'>Credit</label></div>
<div class="md-form-group"> <input class='md-input' id='txtpriod_credit' ng-model='audit_adjustmentManager.editedAuditAdjustment.priod_credit' required><label class='non-select'>Priod Credit</label></div>
</div>
                </div>
            </form>
        </div>
    </div>
</div>

<!--
<form class="form-horizontal" role="form" style="margin:10px;">
  <div class="col-md-6">
    <div class="form-group">
      <label for="txtAuditId" class="col-sm-4 control-label">Audit Id</label>
        <div class="col-sm-7">
            
        	    		<input type="text" class="form-control" id="txtAuditId" ng-model="editedAuditAdjustment.audit_id">
    		        
        </div>
    </div> 
    </div>
  <div class="col-md-6">
    <div class="form-group">
      <label for="txtAccountId" class="col-sm-4 control-label">Account Id</label>
        <div class="col-sm-7">
            
        	    		<input type="text" class="form-control" id="txtAccountId" ng-model="editedAuditAdjustment.account_id">
    		        
        </div>
    </div> 
    </div>
  <div class="col-md-6">
    <div class="form-group">
      <label for="txtDebit" class="col-sm-4 control-label">Debit</label>
        <div class="col-sm-7">
            
        	    		<input type="text" class="form-control" id="txtDebit" ng-model="editedAuditAdjustment.debit">
    		        
        </div>
    </div> 
    </div>
  <div class="col-md-6">
    <div class="form-group">
      <label for="txtCredit" class="col-sm-4 control-label">Credit</label>
        <div class="col-sm-7">
            
        	    		<input type="text" class="form-control" id="txtCredit" ng-model="editedAuditAdjustment.credit">
    		        
        </div>
    </div> 
    </div>
  <div class="col-md-6">
    <div class="form-group">
      <label for="txtPriorDebit" class="col-sm-4 control-label">Prior Debit</label>
        <div class="col-sm-7">
            
        	    		<input type="text" class="form-control" id="txtPriorDebit" ng-model="editedAuditAdjustment.prior_debit">
    		        
        </div>
    </div> 
    </div>
  <div class="col-md-6">
    <div class="form-group">
      <label for="txtPriodCredit" class="col-sm-4 control-label">Priod Credit</label>
        <div class="col-sm-7">
            
        	    		<input type="text" class="form-control" id="txtPriodCredit" ng-model="editedAuditAdjustment.priod_credit">
    		        
        </div>
    </div> 
    </div>
  <div class="col-md-6">
    <div class="form-group">
      <label for="txtJustification" class="col-sm-4 control-label">Justification</label>
        <div class="col-sm-7">
            
        	    		<input type="text" class="form-control" id="txtJustification" ng-model="editedAuditAdjustment.justification">
    		        
        </div>
    </div> 
    </div>


          
</form>
-->