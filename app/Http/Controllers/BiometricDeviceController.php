<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\FingerDevices\StoreDevice;
use App\Http\Requests\FingerDevices\UpdateDevice;
use App\Helpers\FingerHelper;
use App\Models\ZK_Teco_devices;
use App\Models\Personnel;
use ZKLibrary;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Laradevsbd\Zkteco\Http\Library\ZktecoLib;



class BiometricDeviceController extends Controller
{
    //
    public function index()
    {

        /* $zk = new ZktecoLib('192.168.8.102',4370);
        if ($zk->connect()){

            $device= new ZkTeco_devices();
            // Serial Number Sample CDQ9192960002\x00
            $device->model_name= $zk->deviceName();
            $device->serialNumber = $zk->serialNumber();
            $device->port =4370;
            $device->ip='192.168.8.102';
            $attendance = $zk->getAttendance();
            return view('fingersDevices.index',compact('attendance','device'));
        }
        else
        return back()->with('Unable to connect', 'Connection problem' ); */

        $fingerDevices= new ZK_Teco_devices();
        // Serial Number Sample CDQ9192960002\x00
        $fingerDevices->model_name= "ZKTECO";
        $fingerDevices->ip='192.168.8.102';
        $fingerDevices->port =4370;
        $fingerDevices->status=1;
        $fingerDevices->save();

        $fg= ZK_Teco_devices::all();
        return view('fingersDevices.index',compact('fg'));

    }


    public function create()
    {
        return view('fingersDevices.create');
    }

    public function store(StoreDevice $request): RedirectResponse
    {

        $ip =$request->input('ip');
        $zk = new ZKtecoLib($ip,4370);

        if ($zk->connect()) {
            $device= new ZKTeco_devices();
            // Serial Number Sample CDQ9192960002\x00
            $device->model_name= $zk->deviceName();
            $device->port =4370;
            $device->ip='192.168.8.102';
            $device->save();
            $zk->disconnect();
        }
            else {
            return back()->with('Unable to connect', 'Connection problem' );


        }

        return redirect()->route('FingerDevices.index');
    }

    public function show()
    {
        $zk = new ZktecoLib(config('zkteco.ip'),config('zkteco.port'));

        if ($zk->connect()) {
            $deviceUsers = collect($device->getUser())->pluck('uid');
            return view('fingersDevices.show', compact('deviceUsers'));
        }
        else {
            return back()->with('Unable to connect', 'Connection problem' );

        }
    }

    /* public function edit(FingerDevices $fingerDevice)
    {
        return view('fingersDevices.edit', compact('fingerDevice'));
    }

    public function update(UpdateDevice $request, FingerDevices $fingerDevice): RedirectResponse
    {
        $fingerDevice->update($request->validated());


        return redirect()->route('finger_device.index');
    }

    public function destroy(FingerDevices $fingerDevice): RedirectResponse
    {
        try {
            $fingerDevice->delete();
        } catch (\Exception $e) {
            toast("Failed to delete {$fingerDevice->name}", 'error');
        }


        return back();
    } */

    public function addPersonnel(): RedirectResponse
    {
        $zk = new ZktecoLib('192.168.8.102',4370);

        if ($zk->connect()) {
            $/* deviceUsers = collect($device->getUser())->pluck('uid');
            $personnel = Personnel::select('name', 'id')
            ->whereNotIn('id', $deviceUsers)
            ->get();
 */         $personnel =Personnel::all();
            $i = 1;

            foreach ($personnel as $person) {
            $device->setUser($i++, $person->id, $person->name, '12345678', '0');
            }

            return back()->with('Success', 'success' );        }
        else {
            return back()->with('Unable to connect', 'Connection problem' );

        }
    }



    }



