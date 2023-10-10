<div class="modal fade" id="workBreakModal" tabindex="-1" aria-labelledby="workBreakModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <form action="{{route('employee.work.break')}}" method="post">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="workBreakModalLabel">Break Reason</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <input type="hidden" name="userId" value="{{Auth::user()->id}}">
                    <div class="input-group mb-2">                      
                        <select name="type" class="form-select form-control" required>
                            <option value="">--Select Break Type--</option>
                            <option value="Prayers">Prayers Break</option>
                            <option value="Launch">Launch Break</option>
                            <option value="Dinner">Dinner Break</option>
                            <option value="Others">Others</option>                           
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>