<div class="row">
    <div class="col-xl-12 mx-auto">

        <div class="card border-top border-white">
            <div class="card-body p-5">
                <div class="card-title d-flex align-items-center">
                    <div><i class="bx bx-category me-1 font-22 text-white"></i></div>
                    <h5 class="mb-0 text-white">{{_('Add Invoice')}}</h5>
                </div>
                <hr>
                <form id="dynamic-form-container" action="{{ route('invoice.store') }}" method="POST">
                    @csrf
                    <div class="form-container" id="form-template">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="invoicenumber" class="form-label">Invoice No</label>
                                <input type="text" class="form-control" id="invoicenumber" name="Invoicenumber" value="{{ session('invoice_number') ?? '' }}" readonly>
                            </div>
                      

                            <div class="col-md-6">
                                <label for="date" class="form-label">Due Date</label>
                                <input type="date" class="form-control" id="date" name="date" placeholder="Billing Due Date">
                            </div>

                            <div class="col-md-12">
                                <label for="date" class="form-label">Description</label>
                                <textarea style="text: white;" type="text" rows="1" class="form-control" id="description" name="description" placeholder="Description"></textarea>
                            </div>
            

                          

                        
                        </div>
                    </div>    

                    <div class="mt-4" id="rent-fields-container">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Sno</th>
                                    <th>Invoice Type</th>
                                    <th>Amount</th>
                                    <th>Add</th>
                                    <th>Del.</th>
                                </tr>
                            </thead>
                            <tbody id="productTable">
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <select type="text" class="form-control" name="Invoice_type[]">
                                            <option>Select Invoice Type</option>
                                                @foreach ($inv_type as $row)
                                                    <option value="{{$row->id}}">{{$row->type_name}}</option>
                                                @endforeach
                                        </select>
                                    </td>
                                    <td><input type="text" class="form-control" name="amount[]"></td>
                                    <td><button type="button" class="btn btn-success" onclick="addRow()">+</button></td>
                                    <td><button type="button" class="btn btn-danger" onclick="removeRow(this)">-</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-12 mt-3">
                        <button type="submit" class="btn btn-light px-5">Ganrate Invoice</button>
                    </div>
                </form>


            </div>
        </div>
    </div>
</div>
@include('superadmin.invoice.script')
