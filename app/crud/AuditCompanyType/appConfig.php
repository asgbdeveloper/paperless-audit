<?php
/**
 * The base configurations of the Book Manager.
 *
 * This file has the following configurations: MySQL settings.
 *
 */

ApplicationEngine::registerScripts($modulePath,array("content/AuditCompanyType.router.data.js"));
ApplicationEngine::registerSubMenu("app.crud","audit_company_type",array("ui-sref"=>"app.crud.audit_company_type","label"=>"Audit Company Type"));


?>