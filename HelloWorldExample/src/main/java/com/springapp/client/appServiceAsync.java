package com.springapp.client;

import com.google.gwt.user.client.rpc.AsyncCallback;

/**
 * Created by User on 23.03.2015.
 */
public interface appServiceAsync {
    void print(AsyncCallback<String> callback);
}
