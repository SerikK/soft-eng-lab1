package com.springapp.client;

import com.google.gwt.core.client.EntryPoint;
import com.google.gwt.core.client.GWT;
import com.google.gwt.user.client.rpc.AsyncCallback;
import com.google.gwt.user.client.ui.*;

/**
 * Created by User on 23.03.2015.
 */
public class Helloworld implements EntryPoint {
    private appServiceAsync greetingService = GWT.create(appService.class);
    private Label greetingLabel = new Label("Hello from GWT!");

    public void onModuleLoad() {
        RootPanel.get().add(greetingLabel);
        final AsyncCallback<String> callback = new AsyncCallback<String>() {
            @Override
            public void onFailure(Throwable throwable) {
                greetingLabel.setText(throwable.getCause().toString());
            }

            @Override
            public void onSuccess(String s) {
                greetingLabel.setText(s);
            }
        };
        greetingService.print(callback);
    }
}