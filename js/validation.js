// JavaScript Document
function getkat(val){
	
	var selectmenu = document.getElementById(val);
	
	selectmenu.onchange=function(){
		var chosenoption=this.options[this.selectedIndex]

		if(chosenoption.value=='bal'){
			
			document.getElementById('kat2b').style.display = 'none';
			document.getElementById('kat2c').style.display = 'none';
			document.getElementById('kat2d').style.display = 'none';
			document.getElementById('kat2e').style.display = 'none';
			document.getElementById('kat2a').style.display = 'block';
			
			}
		if(chosenoption.value=='ari'){
			
			document.getElementById('kat2e').style.display = 'block';
			document.getElementById('kat2b').style.display = 'none';
			document.getElementById('kat2c').style.display = 'none';
			document.getElementById('kat2d').style.display = 'none';
			document.getElementById('kat2a').style.display = 'none';
			document.getElementById('kat2aa').style.display = 'none';
			document.getElementById('kat2ab').style.display = 'none';
			
			}
		if(chosenoption.value=='polen'){
			
			document.getElementById('kat2b').style.display = 'block';
			document.getElementById('kat2c').style.display = 'none';
			document.getElementById('kat2d').style.display = 'none';
			document.getElementById('kat2e').style.display = 'none';
			document.getElementById('kat2a').style.display = 'none';
			document.getElementById('kat2aa').style.display = 'none';
			document.getElementById('kat2ab').style.display = 'none';
			
			}
		if(chosenoption.value=='arisutu'){
			
			document.getElementById('kat2b').style.display = 'none';
			document.getElementById('kat2c').style.display = 'block';
			document.getElementById('kat2d').style.display = 'none';
			document.getElementById('kat2e').style.display = 'none';
			document.getElementById('kat2a').style.display = 'none';
			document.getElementById('kat2aa').style.display = 'none';
			document.getElementById('kat2ab').style.display = 'none';
			
			}  
		if(chosenoption.value=='propolis'){
			
			document.getElementById('kat2b').style.display = 'none';
			document.getElementById('kat2c').style.display = 'none';
			document.getElementById('kat2d').style.display = 'block';
			document.getElementById('kat2e').style.display = 'none';
			document.getElementById('kat2a').style.display = 'none';
			document.getElementById('kat2aa').style.display = 'none';
			document.getElementById('kat2ab').style.display = 'none';
			
			} 
			if(chosenoption.value=='cicek'){
			
			document.getElementById('kat2b').style.display = 'none';
			document.getElementById('kat2c').style.display = 'none';
			document.getElementById('kat2d').style.display = 'none';
			document.getElementById('kat2e').style.display = 'none';
			document.getElementById('kat2a').style.display = 'block';
			document.getElementById('kat2aa').style.display = 'block';
			document.getElementById('kat2ab').style.display = 'none';
			
			} 
			if(chosenoption.value=='salgi'){
			
			document.getElementById('kat2b').style.display = 'none';
			document.getElementById('kat2c').style.display = 'none';
			document.getElementById('kat2d').style.display = 'none';
			document.getElementById('kat2e').style.display = 'none';
			document.getElementById('kat2a').style.display = 'block';
			document.getElementById('kat2ab').style.display = 'block';
			document.getElementById('kat2aa').style.display = 'none';
			
			} 
 
	}
}

function getAnaliz(x)
{
	var slctmenu = document.getElementById(x);
	
	slctmenu.onchange=function(){
		
		var chosenoption=this.options[this.selectedIndex]
		
		if(chosenoption.value=='Var'){
			
			document.getElementById('certificate').style.display = 'block';
			
			}
		if(chosenoption.value=='Yok'){
		
		document.getElementById('certificate').style.display = 'none';
		
		}
		
	}
}

function getOdeme(x)
{
	var slctmenu = document.getElementById(x);
	
	slctmenu.onchange=function(){
		
		var chosenoption=this.options[this.selectedIndex]
		
		if(chosenoption.value=='Banka EFT/Havale'){
			
			document.getElementById('banka').style.display = 'block';
			document.getElementById('iban').style.display = 'block';
			document.getElementById('hesapsahibi').style.display = 'block';
			document.getElementById('bankaisim').setAttribute('required', 'required');
			document.getElementById('ibanno').setAttribute('required', 'required');
			document.getElementById('hesap').setAttribute('required', 'required');
			
			}
		if(chosenoption.value=='Kapıda Ödeme'){
		
			document.getElementById('banka').style.display = 'none';
			document.getElementById('iban').style.display = 'none';
			document.getElementById('hesapsahibi').style.display = 'none';
		
		}
		
		if(chosenoption.value=='Havale/Kapıda'){
		
			document.getElementById('banka').style.display = 'block';
			document.getElementById('iban').style.display = 'block';
			document.getElementById('hesapsahibi').style.display = 'block';
			document.getElementById('bankaisim').setAttribute('required', 'required');
			document.getElementById('ibanno').setAttribute('required', 'required');
			document.getElementById('hesap').setAttribute('required', 'required');
		
		}	
	}
}

function getKargo(x)
{
	var slctmenu = document.getElementById(x);
	
	slctmenu.onchange=function(){
		
		var chosenoption=this.options[this.selectedIndex]
		
		if(chosenoption.value=='Var'){
			
			document.getElementById('kargo').style.display = 'block';
			document.getElementById('kargosirket').setAttribute('required', 'required');
			
			}
		if(chosenoption.value=='Yok'){
		
		document.getElementById('kargo').style.display = 'none';
		
		}
		
	}
}

function getMarka(x)
{
	var slctmenu = document.getElementById(x);
	
	slctmenu.onchange=function(){
		
		var chosenoption=this.options[this.selectedIndex]
		
		if(chosenoption.value=='Var'){
			
			document.getElementById('brand').style.display = 'block';
			
			}
		if(chosenoption.value=='Yok'){
		
		document.getElementById('brand').style.display = 'none';
		
		}
		
	}
}

function getOrganik(x)
{
	var slctmenu = document.getElementById(x);
	
	slctmenu.onchange=function(){
		
		var chosenoption=this.options[this.selectedIndex]
		
		if(chosenoption.value=='Organik'){
			
			document.getElementById('certificate2').style.display = 'block';
			
			}
		if(chosenoption.value=='Organik Değil'){
		
		document.getElementById('certificate2').style.display = 'none';
		
		}
		
	}
}

function formSubmit(){
	
		var icerik1 = document.getElementById('kategori1').value;
		var icerik2 = document.getElementById('kategori2a').value;
		var icerik3 = document.getElementById('kategori2b').value;
		var icerik4 = document.getElementById('kategori2c').value;
		var icerik5 = document.getElementById('kategori2d').value;
		var icerik6 = document.getElementById('kategori2e').value;
		var icerik7 = document.getElementById('kategori2aa').value;
		var icerik8 = document.getElementById('kategori2ab').value;
		var icerik9 = document.getElementById('baslik').value;
		var icerik10 = document.getElementById('satis').value;
		var icerik11 = document.getElementById('sunum').value;
		var icerik12 = document.getElementById('rakim').value;
		var icerik13 = document.getElementById('yoresi').value;
		var icerik14 = document.getElementById('kimden').value;
		var icerik15 = document.getElementById('teslim').value;
		var icerik16 = document.getElementById('kargoucret').value;
		var icerik17 = document.getElementById('kargoanlasma').value;
		var icerik18 = document.getElementById('kargosirket').value;
		var icerik19 = document.getElementById('marka').value;
		var icerik20 = document.getElementById('markaadi').value;
		var icerik21 = document.getElementById('uretim').value;
		var icerik22 = document.getElementById('fiyat').value;
		var icerik23 = document.getElementById('odemesekli').value;
		var icerik24 = document.getElementById('bankaisim').value;
		var icerik25 = document.getElementById('hesap').value;
		var icerik26 = document.getElementById('ibanno').value;
		var icerik27 = document.getElementById('analiz').value;
		var icerik28 = document.getElementById('analizrapor').value;
		
		//#1 if
		if(icerik1 == "" || icerik9 == "" || icerik10 == "" || icerik11 == "" || icerik12 == "" || icerik13 == "" || icerik14 == "" || icerik15 == "" || icerik16 == "" || icerik17 == "" || icerik19 == "" || icerik21 == "" || icerik22 == "" || icerik23 == "" || icerik27 == ""){
			
				if(icerik1 == ""){
					
					$("#kategori1").css({"border":"3px solid red"}).attr("hidden");
					
				}else{
				
					$("#kategori1").css({"border":"3px solid #ccc"});
				
				}
				
				if(icerik9 == ""){
					
					$("#baslik").css({"border":"3px solid red"}).attr("placeholder","Lütfen boş bırakmayınız.");
				
					}else{
			
						$("#baslik").css({"border":"3px solid #ccc"}).removeAttr("placeholder");
				
				}
				
				if(icerik10 == ""){
					
					$("#satis").css({"border":"3px solid red"}).attr("hidden");
					
				}else{
				
					$("#satis").css({"border":"3px solid #ccc"});
				
				}
				
				if(icerik11 == ""){
					
					$("#sunum").css({"border":"3px solid red"}).attr("hidden");
					
				}else{
				
					$("#sunum").css({"border":"3px solid #ccc"});
				
				}
				
				if(icerik12 == ""){
					
					$("#rakim").css({"border":"3px solid red"}).attr("placeholder","Lütfen boş bırakmayınız.");
				
					}else{
			
						$("#rakim").css({"border":"3px solid #ccc"}).removeAttr("placeholder");
				
				}
				
				if(icerik13 == ""){
					
					$("#yoresi").css({"border":"3px solid red"}).attr("placeholder","Lütfen boş bırakmayınız.");
				
					}else{
			
						$("#yoresi").css({"border":"3px solid #ccc"}).removeAttr("placeholder");
				
				}
				
				if(icerik14 == ""){
					
					$("#kimden").css({"border":"3px solid red"}).attr("hidden");
					
				}else{
				
					$("#kimden").css({"border":"3px solid #ccc"});
				
				}
				
				if(icerik15 == ""){
					
					$("#teslim").css({"border":"3px solid red"}).attr("hidden");
					
				}else{
				
					$("#teslim").css({"border":"3px solid #ccc"});
				
				}
				
				if(icerik16 == ""){
					
					$("#kargoucret").css({"border":"3px solid red"}).attr("hidden");
					
				}else{
				
					$("#kargoucret").css({"border":"3px solid #ccc"});
				
				}
				
				if(icerik17 == ""){
					
					$("#kargoanlasma").css({"border":"3px solid red"}).attr("hidden");
					
				}else{
				
					$("#kargoanlasma").css({"border":"3px solid #ccc"});
				
				}
				
				if(icerik19 == ""){
					
					$("#marka").css({"border":"3px solid red"}).attr("hidden");
					
				}else{
				
					$("#marka").css({"border":"3px solid #ccc"});
				
				}
				
				if(icerik21 == ""){
					
					$("#uretim").css({"border":"3px solid red"}).attr("placeholder","Lütfen boş bırakmayınız.");
				
					}else{
			
						$("#uretim").css({"border":"3px solid #ccc"}).removeAttr("placeholder");
				
				}
				
				if(icerik22 == ""){
					
					$("#fiyat").css({"border":"3px solid red"}).attr("placeholder","Lütfen boş bırakmayınız.");
				
					}else{
			
						$("#fiyat").css({"border":"3px solid #ccc"}).removeAttr("placeholder");
				
				}
				
				if(icerik23 == ""){
					
					$("#odemesekli").css({"border":"3px solid red"}).attr("hidden");
					
				}else{
				
					$("#odemesekli").css({"border":"3px solid #ccc"});
				
				}
				
				if(icerik27 == ""){
					
					$("#analiz").css({"border":"3px solid red"}).attr("hidden");
					
				}else{
				
					$("#analiz").css({"border":"3px solid #ccc"});
				
				}
			
		}else{
			
			if(icerik17=='Yok' & icerik19=='Yok' & icerik23=='Kapıda Ödeme' & icerik27=='Yok'){
			
			if(icerik1=='bal'){//bal if

				if(icerik2 == ""){//icerik2 if
					
					if(icerik2 == ""){
					
						$("#kategori2a").css({"border":"3px solid red"}).attr("hidden");
					
						}else{
						
							$("#kategori2a").css({"border":"3px solid #ccc"});
						
						}

				}else{
					
					if(icerik2=='cicek'){
						
						if(icerik7 == ""){
							
							if(icerik7 == ""){
					
								$("#kategori2aa").css({"border":"3px solid red"}).attr("hidden");
							
								}else{
								
									$("#kategori2aa").css({"border":"3px solid #ccc"});
								
								}
							
							}else{

								$("#ilanForm").submit();
								
								}
					}
					
					if(icerik2=='salgi'){
						
						if(icerik8 == ""){
							
							if(icerik8 == ""){
							
								$("#kategori2ab").css({"border":"3px solid red"}).attr("hidden");
									
								}else{
								
									$("#kategori2ab").css({"border":"3px solid #ccc"});
								
								}
							
						}else{

							$("#ilanForm").submit();
							
							}
					}
								
				}//icerik2 if end
			}//bal if end
			
			if(icerik1=='ari'){//ari if
				
				if(icerik6 == ""){
					
					if(icerik6 == ""){
					
						$("#kategori2e").css({"border":"3px solid red"}).attr("hidden");
							
						}else{
						
							$("#kategori2e").css({"border":"3px solid #ccc"});
						
						}

				}else{

					$("#ilanForm").submit();
					
					}
				
			}//ari if end
			
			if(icerik1=='arisutu'){//arisutu if
							
							if(icerik4 == ""){
								
								if(icerik4 == ""){
								
									$("#kategori2c").css({"border":"3px solid red"}).attr("hidden");
										
									}else{
									
										$("#kategori2c").css({"border":"3px solid #ccc"});
									
									}
			
							}else{

								$("#ilanForm").submit();
								
								}
							
						}//arisutu if end
						
						if(icerik1=='polen'){//polen if
							
							if(icerik3 == ""){
								
								if(icerik3 == ""){
								
									$("#kategori2b").css({"border":"3px solid red"}).attr("hidden");
										
									}else{
									
										$("#kategori2b").css({"border":"3px solid #ccc"});
									
									}
			
							}else{

								$("#ilanForm").submit();
								
								}
							
						}//polen if end
						
						if(icerik1=='propolis'){//propolis if
							
							if(icerik5 == ""){
								
								if(icerik5 == ""){
								
									$("#kategori2d").css({"border":"3px solid red"}).attr("hidden");
										
									}else{
									
										$("#kategori2d").css({"border":"3px solid #ccc"});
									
									}
			
							}else{

								$("#ilanForm").submit();
								
								}
							
						}//propolis if end
			
			}else{
				
				if(icerik18 == '' || icerik20 == '' || icerik24 == '' || icerik25 == '' || icerik26 == '' || icerik28 == ''){
					
					if(icerik18 == ""){
					
						$("#kargosirket").css({"border":"3px solid red"}).attr("hidden");
							
						}else{
						
							$("#kargosirket").css({"border":"3px solid #ccc"});
						
						}
						
					if(icerik20 == ""){
					
						$("#markaadi").css({"border":"3px solid red"}).attr("placeholder","Lütfen boş bırakmayınız.");
							
						}else{
						
							$("#markaadi").css({"border":"3px solid #ccc"}).removeAttr("placeholder");
						
						}
						
					if(icerik24 == ""){
					
						$("#bankaisim").css({"border":"3px solid red"}).attr("hidden");
							
						}else{
						
							$("#bankaisim").css({"border":"3px solid #ccc"});
						
						}
						
					if(icerik25 == ""){
					
						$("#hesap").css({"border":"3px solid red"}).attr("placeholder","Lütfen boş bırakmayınız.");
							
						}else{
						
							$("#hesap").css({"border":"3px solid #ccc"}).removeAttr("placeholder");
						
						}
						
					if(icerik26 == ""){
					
						$("#ibanno").css({"border":"3px solid red"}).attr("placeholder","Lütfen boş bırakmayınız.");
							
						}else{
						
							$("#ibanno").css({"border":"3px solid #ccc"}).removeAttr("placeholder");
						
						}
						
					if(icerik28 == ""){
					
						$("#analizrapor").css({"border":"3px solid red"}).attr("placeholder","Lütfen boş bırakmayınız.");
							
						}else{
						
							$("#analizrapor").css({"border":"3px solid #ccc"}).removeAttr("placeholder");
						
						}
					
					
					}else{
						
						if(icerik1=='bal'){//bal if

							if(icerik2 == ""){//icerik2 if
								
								if(icerik2 == ""){
								
									$("#kategori2a").css({"border":"3px solid red"}).attr("hidden");
								
									}else{
									
										$("#kategori2a").css({"border":"3px solid #ccc"});
									
									}
			
							}else{
								
								if(icerik2=='cicek'){
									
									if(icerik7 == ""){
										
										if(icerik7 == ""){
								
											$("#kategori2aa").css({"border":"3px solid red"}).attr("hidden");
										
											}else{
											
												$("#kategori2aa").css({"border":"3px solid #ccc"});
											
											}
										
										}else{

											$("#ilanForm").submit();
											
											}
								}
								
								if(icerik2=='salgi'){
									
									if(icerik8 == ""){
										
										if(icerik8 == ""){
										
											$("#kategori2ab").css({"border":"3px solid red"}).attr("hidden");
												
											}else{
											
												$("#kategori2ab").css({"border":"3px solid #ccc"});
											
											}
										
									}else{

										$("#ilanForm").submit();
										
										}
								}
											
							}//icerik2 if end
						}//bal if end
						
						if(icerik1=='ari'){//ari if
							
							if(icerik6 == ""){
								
								if(icerik6 == ""){
								
									$("#kategori2e").css({"border":"3px solid red"}).attr("hidden");
										
									}else{
									
										$("#kategori2e").css({"border":"3px solid #ccc"});
									
									}
			
							}else{

								$("#ilanForm").submit();
								
								}
							
						}//ari if end
						
						if(icerik1=='arisutu'){//arisutu if
							
							if(icerik4 == ""){
								
								if(icerik4 == ""){
								
									$("#kategori2c").css({"border":"3px solid red"}).attr("hidden");
										
									}else{
									
										$("#kategori2c").css({"border":"3px solid #ccc"});
									
									}
			
							}else{

								$("#ilanForm").submit();
								
								}
							
						}//arisutu if end
						
						if(icerik1=='polen'){//polen if
							
							if(icerik3 == ""){
								
								if(icerik3 == ""){
								
									$("#kategori2b").css({"border":"3px solid red"}).attr("hidden");
										
									}else{
									
										$("#kategori2b").css({"border":"3px solid #ccc"});
									
									}
			
							}else{

								$("#ilanForm").submit();
								
								}
							
						}//polen if end
						
						if(icerik1=='propolis'){//propolis if
							
							if(icerik5 == ""){
								
								if(icerik5 == ""){
								
									$("#kategori2d").css({"border":"3px solid red"}).attr("hidden");
										
									}else{
									
										$("#kategori2d").css({"border":"3px solid #ccc"});
									
									}
			
							}else{

								$("#ilanForm").submit();
								
								}
							
						}//propolis if end

						}
				}
		}//#1 if end
	
}
