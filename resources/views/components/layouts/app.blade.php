<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script src="//cdn.datatables.net/2.0.5/js/dataTables.min.js"></script>
    <title>{{ $title ?? 'Page Title' }}</title>


</head>

<body class="grid grid-cols-[300px,1fr]">
    <div class="w-[300px]">
        @include('livewire.component.sidebar', ['title' => $title])
    </div>
    <div class="bg-gray-50 w-full relative">
        <header class="w-full absolute">
            @include('livewire.component.navbar', ['title' => $title])
        </header>
        {{ $slot }}
    </div>

    <script>

        $(document).ready(function() {
            $('#myTable').DataTable({
                info: false,
                paging: false,

            });


        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.min.js"></script>
    {{-- <script>
        const config = {
            type: 'bar',
            data: data,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            },
        };
        const labels = Utils.months({
            count: 7
        });
        const data = {
            labels: labels,
            datasets: [{
                label: 'My First Dataset',
                data: [65, 59, 80, 81, 56, 55, 40],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 205, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(201, 203, 207, 0.2)'
                ],
                borderColor: [
                    'rgb(255, 99, 132)',
                    'rgb(255, 159, 64)',
                    'rgb(255, 205, 86)',
                    'rgb(75, 192, 192)',
                    'rgb(54, 162, 235)',
                    'rgb(153, 102, 255)',
                    'rgb(201, 203, 207)'
                ],
                borderWidth: 1
            }]
        };
    </script> --}}
    <script src="./node_modules/flowbite/dist/flowbite.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.btn-edit').click(function(){
                var id = $(this).data('id');
                $.ajax({
                    url: '/admin/karyawan/edit-karyawan/' + id,
                    type: 'GET',
                    success: function(response){
                        console.log(response)
                        $('#edit-karyawan-modal #id').val(response['id'])
                        $('#edit-karyawan-modal #name').val(response['name'])
                        $('#edit-karyawan-modal #no_telp').val(response['no_telp'])
                        $('#edit-karyawan-modal #email').val(response['email'])
                        $('#edit-karyawan-modal #jenis_kelamin').val(response['jenis_kelamin'])
                        $('#edit-karyawan-modal #tanggal_lahir').val(response['tanggal_lahir'])
                        $('#edit-karyawan-modal #tempat_lahir').val(response['tempat_lahir'])
                    },
                    error: function(xhr){
                        
                        console.log('error');
                        console.log(xhr.responseText);
                        
                    }
                });
            });
        
            $('.close').click(function(){
                $('#myModal').hide();
            });
        });
        </script>
        <script>
            $(document).ready(function(){
                $('#form-edit-karyawan').submit(function(e){
                    e.preventDefault(); 
                    var id = $('#edit-karyawan-modal #id').val();
                    var actionUrl = '/admin/karyawan/update-karyawan/' + id;
                    $(this).attr('action', actionUrl);
                    this.submit();
                });

            });
        </script>
        
</body>

</html>
