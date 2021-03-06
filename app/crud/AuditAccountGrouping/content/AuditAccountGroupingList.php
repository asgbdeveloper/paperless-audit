
<div class="padding" bm-ui-permission="app.crud.audit_account_grouping" login-user="app.loginUser">
    <div ng-if="dataImportManager.windowVisible">
        <span ng-include="dataImportManager.importOptions.templatePath"></span>
    </div>
    <div class="box">
        <div class="box-header {{audit_account_groupingManager.listEditor.headerStyle}} non-select">
            <h2>{{audit_account_groupingManager.listEditor.title}}</h2>
            <small>{{audit_account_groupingManager.listEditor.subTitle}}</small>
        </div>
        <div class="box-tool">
            <ul class="nav" >
                <li class="nav-item inline">
                    <input id="filter_AuditAccountGrouping" type="text" placeholder="Search" class="form-control input-sm w-auto inline m-r"/>
                </li>
                <li class="nav-item inline">
                    <button uib-tooltip="New" ng-click="audit_account_groupingManager.createItem()" 
                    	class="btn btn-default btn-xs"> &nbsp;<i class="fa fa-plus"></i>&nbsp; </button>
                </li>
                <li class="nav-item inline dropdown"> <a class="nav-link" data-toggle="dropdown" aria-expanded="false"> <i class="fa fa-bars"></i> </a>
                    <div class="dropdown-menu pull-right">
                        <a class="dropdown-item" href=""><i class="fa fa-refresh"></i> Refresh</a>
                        <div class="dropdown-divider">
                        </div>
                        <div class="dropdown-item dropdown-submenu">
                            <a tabindex="-1" href=""><i class="fa fa-cloud-download"></i> Export</a>
                            <div class="dropdown-menu pull-left" role="menu">
                                <a ng-click="audit_account_groupingManager.export('Excel')"  class="dropdown-item" href=""><i class="fa  fa-file-excel-o"></i>  Excel</a> 
                                <!--<a class="dropdown-item" href=""><i class="fa  fa-file-word-o"></i> Word</a> 
                                <a class="dropdown-item" href=""><i class="fa  fa-file-pdf-o"></i> PDF</a>-->
                            </div>
                        </div>
                        <div class="dropdown-item dropdown-submenu">
                            <a tabindex="-1" href=""><i class="fa fa-cloud-upload"></i> Import</a>
                            <div class="dropdown-menu pull-left" role="menu">
                                <a class="dropdown-item" href="" ng-click="dataImportManager.showImportWindow('Excel')"><i class="fa  fa-file-excel-o"></i> Excel</a> <a class="dropdown-item" href=""><i class="fa  fa-file-word-o"></i> Word</a> <a class="dropdown-item" href=""><i class="fa  fa-file-pdf-o"></i> PDF</a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            &nbsp;
        </div>
        <div class="box-body">
            <div class="table-responsive">
                <table class="table m-b-none table-condenced non-select" ui-jp="footable" data-filter="#filter_AuditAccountGrouping" data-page-size="500">
                    <thead>
                        <tr>
                            <td style="width:150px !important;"></td>
                            <th >Grouping Code</th>
<th >Grouping Name</th>
<th >Description</th>
<th >Parent Code</th>
<th >Account Type</th>
<th >Mapping Hint</th>
<th >System Name</th>
<th >Report Label</th>
<th >Normal Balance</th>
<th >Report Note Name</th>
<th >Archived</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover-target hover-shadow" ng-repeat="item in audit_account_groupingManager.audit_account_groupingsList track by $index">
                            <td><span class="hover-show">
                                <button uib-tooltip="Edit" class="btn btn-info btn-xs"  
            	ng-click="audit_account_groupingManager.editItem(item.audit_account_grouping_id)"> <i class="fa fa-pencil"></i> </button>
                                <button uib-tooltip="Delete" class="btn btn-danger  btn-xs" 
            	ng-click="audit_account_groupingManager.deleteItem(item.audit_account_grouping_id)"> <i class="fa fa-trash-o"></i> </button>
                                </span></td>
                            <td>{{item.grouping_code}}</td>
<td>{{item.grouping_name}}</td>
<td>{{item.description}}</td>
<td>{{item.parent_code}}</td>
<td>{{item.account_type}}</td>
<td>{{item.mapping_hint}}</td>
<td>{{item.system_name}}</td>
<td>{{item.report_label}}</td>
<td>{{item.normal_balance}}</td>
<td>{{item.report_note_name}}</td>
<td>{{item.archived}}</td>
                        </tr>
                    </tbody>
                    <tfoot class="hide-if-no-paging">
                        <tr>
                            <td colspan="5" class="text-center"><ul class="pagination">
                                </ul></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
