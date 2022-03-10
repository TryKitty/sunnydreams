<br />
<div class="container-fluid">
  <div class="col-md-12">
    <a
      href="{{ route('Dashboard-slide.create') }}"
      class="btn btn-md btn-dark mb-3 float-right"
      ><i class="bx bx-plus text-light"></i
    ></a>
    <br />
    <div class="row">
      @foreach ($show as $slide)

      <div class="col-md-4 text-dark">
        <table class="table">
          <thead>
            <tr>
              <th class="table-warning" scope="col">Image</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="table-light">
                <img
                  width="150px"
                  height="150px"
                  src="{{ asset('storage/'. $slide->image) }}"
                  alt=""
                  srcset=""
                  class="rd mb-1"
                />
              </td>
              
            </tr>
            <tr>
              <td class="fdash rd border-0">
                <div class="row">
                  <div class="col-sm-6">
                    <a
                      href="{{ route('Dashboard-slide.edit', $slide->id) }}"
                      class="btn btn-sm btndb"
                      ><i class="bx bx-edit"></i
                    ></a>
                  </div>
                  <div class="col-sm-6">
                    <form
                      onsubmit="return confirm('Udah Yakin dihapus  ?');"
                      action="{{ route('Dashboard-slide.destroy', $slide->id) }}"
                      method="POST"
                    >
                      @csrf @method('DELETE')
                      <button type="submit" class="btn btn-sm btndb">
                        <i class="bx bx-trash"></i>
                      </button>
                    </form>
                  </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      @endforeach
    </div>
  </div>
</div>
