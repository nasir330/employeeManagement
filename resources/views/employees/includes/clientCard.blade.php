<!-- Client onselect info start -->
<div id="client" class="card">
    <div class="card-header">
        Client
    </div>
    <div class="card-body">
        <div class="row mb-2">
            <div class="col-md-6">
                <label for="clientPhone">Phone Number:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="countryDropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="flag-icon flag-icon-us"></span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="countryDropdown">
                                <a class="dropdown-item" href="#" data-code="+1" data-flag="us">
                                    <span class="flag-icon flag-icon-us"></span> United
                                    States (+1)
                                </a>
                                <a class="dropdown-item" href="#" data-code="+44" data-flag="gb">
                                    <span class="flag-icon flag-icon-gb"></span> United
                                    Kingdom (+44)
                                </a>
                                <!-- Add more dropdown items for each country -->
                            </div>
                        </div>
                    </div>
                    <input type="tel" class="form-control" id="clientPhone" name="clientPhone">
                </div>
            </div>
            <div class="col-md-6">
                <label for="clientWhatsapp" class="mb-0">Whatsapp</label>
                <div class="input-group mb-2">
                    <input type="text" name="clientWhatsapp" class="form-control">
                </div>
            </div>
            <div class="col-md-6">
                <label for="govId" class="mb-0">Identity-01</label>
                <div class="input-group mb-2">
                    <select name="govId" class="form-select form-control" required>
                        <option value="">--Identity Type--</option>
                        <option value="Passport">Passport</option>
                        <option value="NID">National Id Card</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <label for="govIdNo" class="mb-0">Identity
                    Number</label>
                <div class="input-group mb-2">
                    <input type="text" name="govIdNo" class="form-control" placeholder="Identity Number" required>
                </div>
            </div>
            <div class="col-md-6">
                <label for="licence" class="mb-0">Identity-02</label>
                <div class="input-group mb-2">
                    <select name="licence" class="form-select form-control" required>
                        <option value="">--Identity Type--</option>
                        <option value="Licence">Driving Licence</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <label for="govIdNo" class="mb-0">Identity
                    Number</label>
                <div class="input-group mb-2">
                    <input type="text" name="govIdNo" class="form-control" placeholder="Identity Number" required>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Client onselect info end -->