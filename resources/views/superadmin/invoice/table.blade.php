<h6 class="mb-0 text-uppercase">Manage Invoice</h6>
<hr>
<div class="container mt-4">
    <div class="table-responsive">
        <table class="table table-striped table-bordered" >
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Block</th>
                    <th>Flat</th>
                    <th>Owner Name</th>
                    <th>Owner Contact</th>
                    <th>Total Amount</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $count = 1;
                @endphp
               
                    
                <tr>
                    <td>{{$count++}}</td>
                    <td>A</td>
                    <td>101</td>
                    <td>Ali Muammad</td>
                    <td>03312187411</td>
                    <td>200000</td>
                    
                    <td>
                        <a href="#" class="edit-btn"
                            title="Edit">
                           <i class="fas fa-edit"></i>
                       </a>
                       <a href="#" class="delete-btn" title="Delete" data-id="#"
                           style="margin-left: 10px;">
                           <i class="fas fa-trash"></i>
                       </a>
                    </td>
                    
                </tr>
                <!-- More rows as needed -->
            
                    
         
            </tbody>
        </table>
    </div>
</div>
@include('superadmin.allotments.script')
