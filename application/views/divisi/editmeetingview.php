<body style="background-color:rgb(247,247,247) ">
	<div class="col-md-12 col-sm-9 col-xs-12">
		<div class="col-md-12 col-sm-9 col-xs-12">
			<div class="right_col" role="main" style="margin-left:0px!important">
				<div class="page-title">
					<div class="title_right">
						<h3><a href="<?=base_url()?>/Divisi"><i class="fa fa-chevron-left"></i></a> <?=$title?></h3>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>

			<?=$this->session->flashdata('alert')?>

			<div class="clearfix"></div>
			<div class="col-md-12 col-sm-12 col-xs-12">

				<div class="x_panel">

					<?=form_open('Divisi/do_editmeeting')?>
					<div class="x_content">
						<br>
						<?php foreach($meetings as $meetings_item):?>
							<div class="form-horizontal form-label-left">					
								<div class="form-group col-md-12">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Subject</label>
									<div class="col-md-6 col-sm-6 col-xs-12">
										<input type="text" required="true"  placeholder="perihal" name="perihal" class="form-control col-md-7 col-xs-12" value="<?=$meetings_item['perihal']?>">
									</div>
								</div>

								<div class="form-group col-md-12">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Room</label>
									<div class="col-md-6 col-sm-6 col-xs-12">
										<select id="ruangan" name="ruangan"  class="form-control" required>
											<option value="<?=$meetings_item['ruangan_meeting']?>"><?=$meetings_item['ruangan_nama']?></option>
											<?php foreach($ruangans as $ruangan_item):?>
												<option value="<?=$ruangan_item['id_ruangan']?>"><?=$ruangan_item['ruangan_nama'];?> (Kapasitas : <?=$ruangan_item['kapasitas_ruangan'];?> orang)</option>
											<?php endforeach?>
										</select>
									</div>
								</div>

								<div class="form-group col-md-12">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Date</label>
									<div class="col-md-6 col-sm-6 col-xs-12">
										<input type="date" required="true"  placeholder="dd/mm/yyyy" value="<?=$meetings_item['tanggal']?>" name="tanggal" class="form-control col-md-7 col-xs-12">
									</div>
								</div>

								<div class="form-group col-md-12">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Start</label>
									<div class="col-md-6 col-sm-6 col-xs-12">
										<input type="time" placeholder="hh:mm" value="<?=$meetings_item['waktu_mulai']?>" required="true"  name="waktu_mulai" class="form-control col-md-7 col-xs-12">
									</div>
								</div>

								<div class="form-group col-md-12">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Finish</label>
									<div class="col-md-6 col-sm-6 col-xs-12">
										<input type="time" value="<?=$meetings_item['waktu_selesai']?>" required="true"  placeholder="hh:mm" name="waktu_selesai" class="form-control col-md-7 col-xs-12">
									</div>
								</div>

								<div class="form-group col-md-12">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Estimated participants</label>
									<div class="col-md-6 col-sm-6 col-xs-12">
										<input type="number"  required="true" value="<?=$meetings_item['estimasi_peserta']?>" placeholder="estimasi peserta" name="estimasi_peserta" class="form-control col-md-7 col-xs-12">
									</div>
								</div>
								<div class="form-group col-md-12">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">PIC</label>
									<div class="col-md-6 col-sm-6 col-xs-12">
										<input type="text" placeholder="PIC" value="<?=$meetings_item['PIC']?>" name="pic"  required="true" class="form-control col-md-7 col-xs-12">
									</div>
								</div>
								

								<div class="form-group col-md-12">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Status</label>
									<div class="col-md-6 col-sm-6 col-xs-12">
										<select id="status" name="status" class="form-control" required>
											<option value=0>Internal
											</option>
											<option value=1>Eksternal
											</option>
										</select>
									</div>
								</div>
								<div class="form-group col-md-12">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Snack</label>
									<div class="col-md-6 col-sm-6 col-xs-12">
										<select id="snack" name="snack" class="form-control" required>
											<option value=0>Tidak
											</option>
											<option value=1>Iya
											</option>
										</select>
									</div>
								</div>

								<div class="form-group col-md-12">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Note</label>
									<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" placeholder="note" value="<?=$meetings_item['note']?>" name="note" class="form-control col-md-7 col-xs-12">
									</div>
								</div>
								<div>
									<input type="hidden" name="id" value="<?=$meetings_item['id_meeting']?>">
								</div>
								
							</div>

						<?php endforeach?>
						<?=form_close()?>
						<div class="form-group pull-right">
							<button type="submit" class="btn btn-success">Submit</button>
						</div>
						<!-- untuk mengambil id -->
						<input type="hidden" name="id" value="<?=$meetings_item['id_meeting']?>">
					</div>
					
				</div>
				<script type="text/javascript">
					$(".inputpeserta").select2();
				</script>
			</div>
		</div>
	</body>