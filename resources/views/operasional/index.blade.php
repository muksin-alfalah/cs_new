@extends('layouts.admin')
@section('content')
<div class="container box">
  <h3 align="center">Live Table </h3><br />
   <div class="panel panel-default">
    <div class="panel-heading">Sample Data</div>
      <div class="panel-body">
        <div id="message"></div>
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="table-responsive">
            <table class="table table-hover table-striped table-bordered w-auto" id="table">
              <thead>
                <tr>
                 <th>no_sc</th>
                 <th>myir</th>
                 <th>nama_pelanggan</th>
                 <th>nomor_hap</th>
                 <th>paket</th>
                 <th>deposit</th>
                 <th>mobi</th>
                 <th>chanel</th>
                 <th>alamat</th>
                 <th>tikor</th>
                 <th>odp_utama</th>
                 <th>odp_alternatif</th>
                 <th>sto</th>
                 <th>mitra</th>
                 <th>tl</th>
                 <th>double_check_wo</th>
                 <th>duration</th>
                 <th>status_order</th>
                 <th>status_sc_order</th>
                 <th>keterangan</th>
                 <th>action</th>
                </tr>
              </thead>
            <tbody>
       
            </tbody>
          </table>
            {{ csrf_field() }}
        </div>
      </div>
    </div>
  </div>
@endsection
@section('javascript')
<script>
$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
});

$(document).ready(function(){

 fetch_data();

 function fetch_data()
 {
  $.ajax({
   url:"{{ Route('operasional.fetch-data') }}",
   dataType:"json",
   success:function(data)
   {
    var html = '';
    html += '<tr>';
    html += '<td contenteditable id="no_sc"></td>';
    html += '<td contenteditable id="tanggal_inputer"></td>';
    html += '<td contenteditable id="myir"></td>';
    html += '<td contenteditable id="nama_pelanggan"></td>';
    html += '<td contenteditable id="nomor_handphone"></td>';
    html += '<td contenteditable id="paket"></td>';
    html += '<td contenteditable id="layanan"></td>';
    html += '<td contenteditable id="deposit"></td>';
    html += '<td contenteditable id="mobi"></td>';
    html += '<td contenteditable id="chanel"></td>';
    html += '<td contenteditable id="alamat"></td>';
    html += '<td contenteditable id="tikor"></td>';
    html += '<td contenteditable id="odp_utama"></td>';
    html += '<td contenteditable id="odp_alternatif"></td>';
    html += '<td contenteditable id="sto"></td>';
    html += '<td contenteditable id="mitra"></td>';
    html += '<td contenteditable id="tl"></td>';
    html += '<td contenteditable id="double_check_wo"></td>';
    html += '<td contenteditable id="duration"></td>';
    html += '<td contenteditable id="status_order"></td>';
    html += '<td contenteditable id="status_sc_order"></td>';
    html += '<td contenteditable id="keterangan"></td>';
    html += '<td><button type="button" class="btn btn-success btn-xs" id="add">Add</button></td></tr>';
    for(var count=0; count < data.length; count++)
    {
     html +='<tr>';
     html +='<td contenteditable class="column_name" data-column_name="no_sc" data-id="'+data[count].id+'">'+data[count].no_sc+'</td>';
     html += '<td contenteditable class="column_name" data-column_name="tanggal_inputer" data-id="'+data[count].id+'">'+data[count].tanggal_inputer+'</td>';
     html +='<td contenteditable class="column_name" data-column_name="myir" data-id="'+data[count].id+'">'+data[count].myir+'</td>';
     html += '<td contenteditable class="column_name" data-column_name="nama_pelanggan" data-id="'+data[count].id+'">'+data[count].nama_pelanggan+'</td>';
      html += '<td contenteditable class="column_name" data-column_name="nomor_handphone" data-id="'+data[count].id+'">'+data[count].nomor_handphone+'</td>';
       html +='<td contenteditable class="column_name" data-column_name="paket" data-id="'+data[count].id+'">'+data[count].paket+'</td>';
       html +='<td contenteditable class="column_name" data-column_name="layanan" data-id="'+data[count].id+'">'+data[count].layanan+'</td>';
     html += '<td contenteditable class="column_name" data-column_name="deposit" data-id="'+data[count].id+'">'+data[count].deposit+'</td>';
       html +='<td contenteditable class="column_name" data-column_name="mobi" data-id="'+data[count].id+'">'+data[count].mobi+'</td>';
     html += '<td contenteditable class="column_name" data-column_name="chanel" data-id="'+data[count].id+'">'+data[count].chanel+'</td>';
       html +='<td contenteditable class="column_name" data-column_name="alamat" data-id="'+data[count].id+'">'+data[count].alamat+'</td>';
     html += '<td contenteditable class="column_name" data-column_name="tikor" data-id="'+data[count].id+'">'+data[count].tikor+'</td>';
       html +='<td contenteditable class="column_name" data-column_name="odp_utama" data-id="'+data[count].id+'">'+data[count].odp_utama+'</td>';
     html += '<td contenteditable class="column_name" data-column_name="odp_alternatif" data-id="'+data[count].id+'">'+data[count].odp_alternatif+'</td>';
    html +='<td contenteditable class="column_name" data-column_name="sto" data-id="'+data[count].id+'">'+data[count].sto+'</td>';
     html += '<td contenteditable class="column_name" data-column_name="mitra" data-id="'+data[count].id+'">'+data[count].mitra+'</td>';
          html += '<td contenteditable class="column_name" data-column_name="tl" data-id="'+data[count].id+'">'+data[count].tl+'</td>';
       html +='<td contenteditable class="column_name" data-column_name="double_check_wo" data-id="'+data[count].id+'">'+data[count].double_check_wo+'</td>';
     html += '<td contenteditable class="column_name" data-column_name="duration" data-id="'+data[count].id+'">'+data[count].duration+'</td>';
       html +='<td contenteditable class="column_name" data-column_name="status_order" data-id="'+data[count].id+'">'+data[count].status_order+'</td>';
     html += '<td contenteditable class="column_name" data-column_name="status_sc_order" data-id="'+data[count].id+'">'+data[count].status_sc_order+'</td>';
    html +='<td contenteditable class="column_name" data-column_name="keterangan" data-id="'+data[count].id+'">'+data[count].keterangan+'</td>';
     html += '<td><button type="button" class="btn btn-danger btn-xs delete" id="'+data[count].id+'">Delete</button></td></tr>';
    }
    $('tbody').html(html);
   }
  });
 }

 var _token = $('input[name="_token"]').val();

 $(document).on('click', '#add', function(){
  var no_sc           = $('#no_sc').text();
  var tanggal_inputer = $('#tanggal_inputer').text();
  var myir            = $('#myir').text();
  var nama_pelanggan  = $('#nama_pelanggan').text();
  var nomor_handphone = $('#nomor_handphone').text();
  var paket           = $('#paket').text();
  var layanan         = $('#layanan').text();
  var deposit         = $('#deposit').text();
  var mobi            = $('#mobi').text();
  var chanel          = $('#chanel').text();
  var alamat          = $('#alamat').text();
  var tikor           = $('#tikor').text();
  var odp_utama       = $('#odp_utama').text();
  var odp_alternatif  = $('#odp_alternatif').text();
  var sto             = $('#sto').text();
  var mitra           = $('#mitra').text();
  var tl              = $('#tl').text();
  var double_check_wo = $('#double_check_wo').text();
  var duration        = $('#duration').text();
  var status_order    = $('#status_order').text();
  var status_sc_order = $('#status_sc_order').text();
  var keterangan      = $('#keterangan').text();

  if(no_sc != '' && tanggal_inputer != ''  && myir != ''  && nama_pelanggan !=  ''  && nomor_handphone !=  ''  && paket !=  ''  && layanan !=  ''  && deposit !=  ''  && mobi != ''  && chanel != ''  && alamat != '' && tikor != ''  && odp_utama != ''  && odp_alternatif != ''  && sto != ''  && mitra != ''  && tl != ''  && double_check_wo != ''  && duration != ''  && status_order != ''  && status_sc_order != ''  && keterangan != '')
  {
   $.ajax({
    url:"{{ route('livetable.add_data') }}",
    method:"POST",
    data:{no_sc:no_sc, tanggal_inputer:tanggal_inputer, myir:myir, nama_pelanggan:nama_pelanggan, nomor_handphone:nomor_handphone, paket:paket, layanan:layanan, deposit:deposit, mobi:mobi, chanel:chanel, alamat:alamat, tikor:tikor, odp_utama:odp_utama, odp_alternatif:odp_alternatif, sto:sto, mitra:mitra, tl:tl, double_check_wo:double_check_wo, duration:duration, status_order:status_order, status_sc_order:status_sc_order, keterangan:keterangan, s_token:_token},
    success:function(data)
    {
     $('#message').html(data);
     fetch_data();
    }
   });
  }
  else
  {
   $('#message').html("<div class='alert alert-danger'>Both Fields are required</div>");
  }
 });

 $(document).on('blur', '.column_name', function(){
  var column_name = $(this).data("column_name");
  var column_value = $(this).text();
  var id = $(this).data("id");
  
  if(column_value != '')
  {
   $.ajax({
    url:"{{ route('livetable.update_data') }}",
    method:"POST",
    data:{column_name:column_name, column_value:column_value, id:id, _token:_token},
    success:function(data)
    {
     $('#message').html(data);
    }
   })
  }
  else
  {
   $('#message').html("<div class='alert alert-danger'>Enter some value</div>");
  }
 });

 $(document).on('click', '.delete', function(){
  var id = $(this).attr("id");
  if(confirm("Are you sure you want to delete this records?"))
  {
   $.ajax({
    url:"{{ route('livetable.delete_data') }}",
    method:"POST",
    data:{id:id, _token:_token},
    success:function(data)
    {
     $('#message').html(data);
     fetch_data();
    }
   });
  }
 });
});
</script>
@endsection
  

