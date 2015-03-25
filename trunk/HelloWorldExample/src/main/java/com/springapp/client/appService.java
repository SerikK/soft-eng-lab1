package com.springapp.client;

import com.google.gwt.user.client.rpc.RemoteService;
import com.google.gwt.user.client.rpc.RemoteServiceRelativePath;

/**
 * Created by User on 23.03.2015.
 */
@RemoteServiceRelativePath("appService.rpc")
public interface appService extends RemoteService{
    String print();
}
